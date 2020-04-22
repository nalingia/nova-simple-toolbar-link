# Nova Simple Toolbar Link
This package provides a custom toolbar link. Just it: a simple anchor with a name, an href, a target and a icon.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nalingia/nova-simple-toolbar-link)](https://packagist.org/packages/nalingia/nova-simple-toolbar-link)
![License](https://img.shields.io/github/license/nalingia/nova-simple-toolbar-link)

## Installation

```shell
composer require nalingia/nova-simple-toolbar-link
```

## Usage

```php
use Nalingia\SimpleToolbarLink\SimpleToolbarLink;

//...

public function tools()
{
    return [
        (new SimpleToolbarLink())
                ->name(__('Packagist'))
                ->to('https://packagist.org/')
                ->target('_blank')
                ->icon('<svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="var(--sidebar-icon)" d="M8 4c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h2zm0 2H6v14h12V6h-2a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2zm2-2v2h4V4h-4z"/></svg>');
    ];
}
```