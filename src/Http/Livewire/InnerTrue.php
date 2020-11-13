<?php

namespace TallModSassy\AdminBaseTruthiness\Http\Livewire;

use Livewire\Component;

class InnerTrue extends Component {
    public int $db_id;
    public string $maybeHighlightedValue; // might be html with search term highlighted

    private array $enumStates = ['editing','reading'];
    public string $isInState = 'reading';
    public bool $showingModal = false;
    public bool $canUpdate = true;

    public array $asrRow;

    protected $viewRef = 'tassy::livewire.OrSomeViewPathProbablyOverridden_CalledFrom_Class_InnerTrue';

    public function mount(int $id)
    {
        $this->db_id = $id;
        $className = $this->someModelName;
        $this->someModel = $className::find($id);

    }
   public function showModal(\MattLibera\LivewireFlash\Livewire\FlashMessage $f) {
        $this->showingModal = true;
        $this->isInState = 'reading';
        session()->forget('flash_notification');
    }

    public function closeModal() {
        $this->showingModal = false;
    }


    public function moveToState(string $enumNewState) {
        assert(in_array($enumNewState, $this->enumStates),__FILE__.__LINE__);
        assert($enumNewState != $this->isInState,__FILE__.__LINE__);
        $this->isInState = $enumNewState;
    }

    public function updated($propertyName)
    {
        $this->canUpdate = false;
        $b = $this->validateOnly($propertyName); // validate on change, but
        $this->canUpdate = true; // Execution doesn't reach here if validation fails.
    }

     public function render()
    {
        return view($this->viewRef);
    }

    protected function defaultSave(\Illuminate\Database\Eloquent\Model $somethingToSave): bool {
        $b = $somethingToSave->save();
        if (!$b) {
            flash('Ouch: Nothing was saved. ')->error()->livewire($this);
            return false;
        } else {
            $this->isInState = 'reading';
            flash('Successfully Updated ')->success()->livewire($this);
            return true;
        }
    }
}
