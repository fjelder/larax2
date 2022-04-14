<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Contract;
use Illuminate\Support\Facades\Auth;
class ContractsList extends Component
{
    public $contracts;
    public $currentContractId;
    public $currentContract;
    public $activeId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($activeId)
    {
        $user = Auth::user();
        $user->currentContractId = $activeId;
        $user->save();
        $this->currentContractId = $user->currentContractId;
        $this->activeId = $activeId;
        $this->contracts = Contract::all()->sortByDesc("id");
        $this->currentContract = Contract::where('id', $this->currentContractId)->first();
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contracts-list', [
            'contracts' => $this->contracts
        ]);
    }
}
