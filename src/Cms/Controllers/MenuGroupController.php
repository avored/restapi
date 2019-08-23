<?php
namespace AvoRed\RestApi\Cms\Controllers;

use AvoRed\Framework\Database\Contracts\MenuGroupModelInterface;
use AvoRed\RestApi\Cms\Resources\MenuResource;

class MenuGroupController
{
    /**
     * Menu Group Repository for the Menu Controller
     * @var \AvoRed\Framework\Database\Repository\MenuGroupRepository $menuGroupRepository
     */
    protected $menuGroupRepository;
    
    /**
     * Construct for the AvoRed install command
     * @param \AvoRed\Framework\Database\Contracts\MenuGroupModelInterface $menuGroupRepository
     */
    public function __construct(
        MenuGroupModelInterface $menuGroupRepository
    ) {
        $this->menuGroupRepository = $menuGroupRepository;
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\View\View
     */
    public function index(string $identifier)
    {
        $menus = $this->menuGroupRepository->getTreeByIdentifier($identifier);
        return MenuResource::collection($menus);
    }
}
