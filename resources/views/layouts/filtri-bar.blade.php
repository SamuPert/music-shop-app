
<div id="filtriFixedBar" class="" >

    <div id="filtriInnerBar" class="collapse shadow" >


        <!-- Prezzo Minimo -->
        <div class="card">
            <div style="padding: 0.5rem">
                Prezzo Minimo: <span id="prezzoMinValue">50</span> €
                <input type="range" class="custom-range" min="0" max="2000" step="1" id="prezzoMinInput" value="300" style="margin-top: 10px">
            </div>
        </div>

        <!-- Prezzo Massimo -->
        <div class="card">
            <div style="padding: 0.5rem">
                Prezzo Massimo: <span id="prezzoMaxValue">50</span> €
                <input type="range" class="custom-range" min="5" max="2000" step="1" id="prezzoMaxInput" value="1700" style="margin-top: 10px">
            </div>
        </div>

        <!-- Categoria -->
        <div class="card">
            <div style="padding: 0.5rem">
                    <span>
                        Categoria:
                    </span>
                <select class="custom-select" id="categoriaInput" >
                    <option value="*" selected> Tutte le categorie. </option>
                    <option value="1">1</option>
                </select>
            </div>
        </div>

        <!-- Nome Prodotto -->
        <div class="card">
            <div style="padding: 0.5rem">
                    <span>
                        Nome Prodotto:
                    </span>
                <input type="text" id="nomeProdottoInput" class="form-control" >
            </div>
        </div>

        <div class="card search-button-filtri">
            <div style="padding: 0.5rem">
                <button
                        onclick="applyFilters();"
                        class="btn btn-light w-100"
                        style="height: 60px"
                > Applica filtri <i class="fa fa-search"></i></button>
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