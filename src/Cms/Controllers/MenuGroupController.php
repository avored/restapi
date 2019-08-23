<?php
namespace AvoRed\Framework\Cms\Controllers;

use AvoRed\Framework\Database\Contracts\MenuModelInterface;
use AvoRed\Framework\Database\Contracts\MenuGroupModelInterface;
use AvoRed\Framework\Database\Models\Menu;
use AvoRed\Framework\Cms\Requests\MenuRequest;
use Illuminate\Http\Request;
use AvoRed\Framework\Database\Contracts\CategoryModelInterface;
use AvoRed\Framework\Database\Models\MenuGroup;
use AvoRed\Framework\Support\Facades\Menu as MenuFacade;

class MenuGroupController
{
    /**
     * Menu Repository for the Menu Controller
     * @var \AvoRed\Framework\Database\Repository\MenuRepository $menuRepository
     */
    protected $menuRepository;

    /**
     * Menu Group Repository for the Menu Controller
     * @var \AvoRed\Framework\Database\Repository\MenuGroupRepository $menuGroupRepository
     */
    protected $menuGroupRepository;

    /**
     * Menu Controller for the Install Command
     * @var \AvoRed\Framework\Database\Repository\CategoryRepository $categoryRepository
     */
    protected $categoryRepository;
    
    /**
     * Construct for the AvoRed install command
     * @param \AvoRed\Framework\Database\Contracts\MenuModelInterface $menuRepository
     * @param \AvoRed\Framework\Database\Contracts\MenuGroupModelInterface $menuGroupRepository
     * @param \AvoRed\Framework\Database\Contracts\CategoryModelInterface $categoryRepository
     */
    public function __construct(
        MenuModelInterface $menuRepository,
        MenuGroupModelInterface $menuGroupRepository,
        CategoryModelInterface $categoryRepository
    ) {
        $this->menuRepository = $menuRepository;
        $this->menuGroupRepository = $menuGroupRepository;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return 'here';
    }
}
