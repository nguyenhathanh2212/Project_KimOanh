@extends('templates.kimoanh.master')

@section('content')
    <main class="main">
        <div id="ctl00_divCenter" class="middle-fullwidth">
            <div class="container">
                <div class="search-page">
                    <div class="search-page-top">
                        <div class="page-header">
                            <h1>Tìm kiếm</h1>
                        </div>
                        <div id="ctl00_mainContent_pnlSearch" class="searchcontrols">
                            <div class="form-inline mrt10">
                                <form action="{{ route('kimoanh.search.index') }}" class="row" method="get">
                                    <div class="form-group col-md-10">
                                        <input name="text" type="text" maxlength="255" size="50" id="ctl00_mainContent_txtSearchInput" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-2">
                                        <input type="submit" name="ctl00$mainContent$btnDoSearch" value="Tìm kiếm" id="ctl00_mainContent_btnDoSearch" class="seachpage-btn btn btn-default" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="ctl00_mainContent_pnlInternalSearch">
                        <div id="ctl00_mainContent_pnlSearchResults" class="searchresults">
                            <div class="clear"></div>
                            <dl class="searchresultlist">
                                <dd class="searchresult">
                                    <table>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>
                                                    <div>
                                                        <h3>
                                                            @php
                                                                $route = isset($item->typeNews)
                                                                    ? route('kimoanh.news.detail', [str_slug($item->title), $item->id])
                                                                    : route('kimoanh.project.detail', [str_slug($item->title), $item->id]);
                                                            @endphp
                                                            <a href="{{ $route }}" target="_blank">
                                                                {{ isset($item->typeNews) ? $item->typeNews->name_custom : $item->typeProject->name_custom . ' > ' . $item->title }}
                                                            </a>
                                                        </h3>
                                                        <div class="searchresultdesc">
                                                            {{ $item->preview }}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <hr>
                                </dd>
                            </dl>
                        </div>
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
