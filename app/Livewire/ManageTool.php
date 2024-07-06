<?php

namespace App\Livewire;

use App\Models\OperationalTool;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ManageTool extends Component
{
    public OperationalTool $tool;

    #[Validate('required|url')]
    public string $url = '';

    #[Validate('required|string|max:255')]
    public string $name = '';

    #[Validate('required|string|max:255')]
    public string $description = '';

    #[Validate('required|url')]
    public string $imageUrl = '';

    #[Validate('boolean')]
    public bool $active = false;

    public string $message = '';

    public function mount(): void
    {
        $this->url = $this->tool->url;
        $this->name = $this->tool->name;
        $this->description = $this->tool->description;
        $this->imageUrl = $this->tool->image;
        $this->active = ! empty($this->tool->active_at);
    }

    public function render(): View
    {
        return view('livewire.manage-tool');
    }

    public function saveTool(): void
    {
        if ($this->active && $this->tool->active_at) {
            $activeAt = now();
        } else {
            $activeAt = $this->active ? now() : null;
        }

        $this->tool->update([
            'url' => $this->url,
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->imageUrl,
            'active_at' => $activeAt,
        ]);

        $this->message = 'Tool updated successfully';
    }
}
