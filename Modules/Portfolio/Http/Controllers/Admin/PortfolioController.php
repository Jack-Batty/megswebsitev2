<?php

namespace Modules\Portfolio\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Portfolio\Entities\Portfolio;
use Modules\Portfolio\Http\Requests\CreatePortfolioRequest;
use Modules\Portfolio\Http\Requests\UpdatePortfolioRequest;
use Modules\Portfolio\Repositories\PortfolioRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class PortfolioController extends AdminBaseController
{
    /**
     * @var PortfolioRepository
     */
    private $portfolio;

    public function __construct(PortfolioRepository $portfolio)
    {
        parent::__construct();

        $this->portfolio = $portfolio;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $portfolios = $this->portfolio->all();

        return view('portfolio::admin.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('portfolio::admin.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreatePortfolioRequest $request
     * @return Response
     */
    public function store(CreatePortfolioRequest $request)
    {
        $this->portfolio->create($request->all());

        return redirect()->route('admin.portfolio.portfolio.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('portfolio::portfolios.title.portfolios')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Portfolio $portfolio
     * @return Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('portfolio::admin.portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Portfolio $portfolio
     * @param  UpdatePortfolioRequest $request
     * @return Response
     */
    public function update(Portfolio $portfolio, UpdatePortfolioRequest $request)
    {
        $this->portfolio->update($portfolio, $request->all());

        return redirect()->route('admin.portfolio.portfolio.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('portfolio::portfolios.title.portfolios')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Portfolio $portfolio
     * @return Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $this->portfolio->destroy($portfolio);

        return redirect()->route('admin.portfolio.portfolio.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('portfolio::portfolios.title.portfolios')]));
    }
}
