<?php

namespace App\Livewire;

use App\Models\BusinessType;
use App\Models\OperationalTool;
use App\Models\ToolCategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Home extends Component
{
    #[Locked]
    public ?ToolCategory $toolCategory = null;

    #[Locked]
    public ?BusinessType $businessType = null;

    public ?string $search = '';

    public function render(): View
    {
        $availableToolCategories = ToolCategory::get();
        $availableBusinessTypes = BusinessType::get();
        $availableTools = OperationalTool::query()
            ->active()
            ->when($this->toolCategory, fn (Builder $query, ToolCategory $toolCategory) => $query->whereHas('toolCategories', fn (Builder $query) => $query->where('tool_categories.id', $toolCategory->id)))
            ->when($this->businessType, fn (Builder $query, BusinessType $businessType) => $query->whereHas('businessTypes', fn (Builder $query) => $query->where('business_types.id', $businessType->id)))
            ->when($this->search, fn (Builder $query) => $query->where(fn (Builder $query) => $query->where('name', 'like', '%'.$this->search.'%')->orWhere('description', 'like', '%'.$this->search.'%')))
            ->get();

        return view('livewire.home', compact('availableToolCategories', 'availableBusinessTypes', 'availableTools'));
    }

    public function setToolCategory(?int $toolCategoryId = null): void
    {
        $this->toolCategory = $toolCategoryId ? ToolCategory::find($toolCategoryId) : null;
    }

    public function setBusinessType(?int $businessTypeId = null): void
    {
        $this->businessType = $businessTypeId ? BusinessType::find($businessTypeId) : null;
    }
}
