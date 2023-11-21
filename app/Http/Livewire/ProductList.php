<?php

namespace App\Http\Livewire;

use App\Models\KlimaUredaj;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\URL;

use function PHPUnit\Framework\isNull;

class ProductList extends Component
{

    use WithPagination;


    public $selected_brend = "";
    public $selected_ucinak_hladenja = "";
    public $selected_energetski_razred = "";
    public $perPage = 10;
    public $loading = false;

    protected $listeners = ['updateReceivedData'];

    public function getUniqueBrendovi()
    {
        return KlimaUredaj::select('brend')->distinct()->pluck('brend')->toArray();
    }

    public function resetAllFilters()
    {
        $this->selected_brend = "";
        $this->selected_ucinak_hladenja = "";
        $this->selected_energetski_razred = "";

        session()->forget('selected_brend');
        session()->forget('selected_ucinak_hladenja');
        session()->forget('selected_energetski_razred');
        $this->gotoPage(1);
    
    }

    public function resetFilter($filter)
    {
        session()->forget($filter);
        $this->gotoPage(1);
    }


    public function mount()
    {
        session(['backButtonPressed' => false]);
    }

    public function updateReceivedData($data)
    {   
        session(['backButtonPressed' => $data]);
    }

    public function sessionManager($selected, $session){
        if($selected){
            if ($selected != (session($session))){
                $this->gotoPage(1); 
            session([$session => $selected]);
        }
        } elseif ($selected == "" && session("backButtonPressed") == true) {
            if ((session($session)) != null) {
                $selected = session($session);
            }
        }
        return $selected;
    }

     
    public function render()
    {   
        $this->selected_brend = $this->sessionManager($this->selected_brend, "selected_brend");
        $this->selected_ucinak_hladenja = $this->sessionManager($this->selected_ucinak_hladenja, "selected_ucinak_hladenja");
        $this->selected_energetski_razred = $this->sessionManager($this->selected_energetski_razred, "selected_energetski_razred");
        
        $brands = $this->getUniqueBrendovi();
        $klimaUredaji = KlimaUredaj::when($this->selected_brend, function ($query) {
            $query->where('brend', '=', $this->selected_brend);
        })->when($this->selected_ucinak_hladenja, function ($query) {
            $query->where('ucinak_hladenja_kw', '=', $this->selected_ucinak_hladenja);
        })->when($this->selected_energetski_razred, function ($query) {
            $query->where('energetski_razred_hladenja', '=', $this->selected_energetski_razred);
        })->paginate($this->perPage);
        
        return view('livewire.product-list', ['klimaUredaji' => $klimaUredaji, 'brands' => $brands]);
        
    }
}
