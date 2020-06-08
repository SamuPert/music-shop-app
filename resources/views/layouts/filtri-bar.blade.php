
<div id="filtriFixedBar" class="" >

    <div id="filtriInnerBar" class="collapse shadow" >


        <!-- Prezzo Minimo -->
        <div class="card">
            <div style="padding: 0.5rem">
                Prezzo Minimo: <span id="prezzoMinValue">50</span> €
                <input type="range" class="custom-range" min="0" max="2000" step="1" id="prezzoMinInput"
                       @if( request()->has('prezzoMin') )
                        value="{{ request()->input('prezzoMin', '300') }}"
                       @else
                        value="300"
                       @endif
                       style="margin-top: 10px">
            </div>
        </div>

        <!-- Prezzo Massimo -->
        <div class="card">
            <div style="padding: 0.5rem">
                Prezzo Massimo: <span id="prezzoMaxValue">50</span> €
                <input type="range" class="custom-range" min="5" max="2000" step="1" id="prezzoMaxInput"
                       @if( request()->has('prezzoMax') )
                       value="{{ request()->input('prezzoMax', '1700') }}"
                       @else
                       value="1700"
                       @endif
                   style="margin-top: 10px">
            </div>
        </div>

        <!-- Nome Prodotto -->
        <div class="card">
            <div style="padding: 0.5rem">
                    <span>
                        Nome Prodotto:
                    </span>
                <input type="text" id="nomeProdottoInput" class="form-control"
                   @if( request()->has('nomeProdotto') )
                       value="{{ request()->input('nomeProdotto','') }}"
                    @endif
                >
            </div>
        </div>

        <div class="card search-button-filtri">
            <div class="row" style="padding: 0.5rem" >
                <div class="col-md-6">
                    <div  class="float-left w-100">
                        <button
                                onclick="applyFilters();"
                                class="btn btn-light float-left"
                                style="height: 60px;"
                        > Applica filtri <i class="fa fa-search"></i></button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="float-left w-100">
                        <button
                                onclick="resetFilters();"
                                class="btn btn-danger"
                                style="height: 60px;"
                        > Resetta filtri <i class="fa fa-ban"></i></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <button
            id="collapsibleFilterButton"
            onclick="toggleFiltriBar();"
            class="btn btn-light float-left"
            style=" background-color: white;"
    ><i class="fa fa-chevron-down" id="iconToggleFiltri" ></i> Filtri di ricerca</button>

</div>