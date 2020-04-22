<?php

namespace Nalingia\SimpleToolbarLink;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class SimpleToolbarLink extends Tool
{

    protected ?string $name = null;
    protected ?string $href = null;
    protected ?string $icon = null;
    protected ?string $target = null;

    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
    }

    public function name(string $name): self {
        $this->name = $name;
        return $this;
    }

    public function to(string $href): self {
        $this->href = $href;
        return $this;
    }

    public function icon(string $icon): self {
        $this->icon = $icon;
        return $this;
    }

    public function target(string $target): self {
        $this->target = $target;
        return $this;
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('simple-toolbar-link::navigation', [
            'name' => $this->name,
            'href' => $this->href,
            'icon' => $this->icon,
            'target' => $this->target,
        ]);
    }
}
