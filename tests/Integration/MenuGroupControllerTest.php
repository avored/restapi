<?php

namespace AvoRed\RestApi\Tests\Integration;

use Illuminate\Support\Facades\DB;
use AvoRed\Framework\Database\Models\Category;
use AvoRed\Framework\Database\Models\MenuGroup;
use AvoRed\RestApi\Cms\Controllers\MenuGroupController;
use AvoRed\Framework\Database\Repository\MenuGroupRepository;
use Illuminate\Http\Request;

class MenuGroupControllerTest extends IntegrationTestCase
{
    public function test_it_returns_menus_with_submenus()
    {
        $this->createMenus();
        $menuGroupRepository = new MenuGroupRepository;
        $controller = new MenuGroupController($menuGroupRepository);
        $request = new Request();

        $menusJson = $controller->index('main-auth-menu')->toResponse($request)->getContent();
        $menus = json_decode($menusJson, true)['data'];

        $expected = [
            ['name' => 'Cart'],
            ['name' => 'Checkout'],
            [
                'name' => 'Account',
                'submenus' => [
                    [ 'name' => 'Logout' ]
                ]
            ]
        ];

        $this->assertArraySubset($expected, $menus);
        $this->assertCount(3, $menus);
        $this->assertCount(1, $menus[2]['submenus']);
    }

    protected function createMenus()
    {
        $mainMenu = MenuGroup::create(['name' => 'Main Menu', 'identifier' => 'main-menu', 'is_default' => 1]);
        $mainMenu->menus()->create(['name' => 'Avored', 'url' => '/category/' . 'avored']);
        $mainMenu->menus()->create(['name' => 'PHP', 'url' => '/category/' . 'php']);
        $mainMenu->menus()->create(['name' => 'Laravel', 'url' => '/category/' . 'laravel']);
        
        $mainAuthMenu = MenuGroup::create(['name' => 'Main Auth Menu', 'identifier' => 'main-auth-menu']);
        $mainAuthMenu->menus()->create(['name' => 'Cart', 'url' => '/cart']);
        $mainAuthMenu->menus()->create(['name' => 'Checkout', 'url' => '/checkout']);
        $accountMenu = $mainAuthMenu->menus()->create(['name' => 'Account', 'url' => '/account']);
        $mainAuthMenu->menus()->create(['name' => 'Logout', 'url' => '/logout', 'parent_id' => $accountMenu->id]);
    }
}
