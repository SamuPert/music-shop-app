@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col col-md-auto">
            <div data-ride="carousel" class="carousel slide" id="carousel-1">
                <div role="listbox" class="carousel-inner">
                    <div class="carousel-item active"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image" /></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image" /></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png" alt="Slide Image" /></div>
                </div>
                <div><a href="#carousel-1" role="button" data-slide="prev" class="carousel-control-prev"><span aria-hidden="true" class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a href="#carousel-1" role="button" data-slide="next"
                                                                                                                                                                                                                        class="carousel-control-next"><span aria-hidden="true" class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
        <div class="col col-md-auto">
            <h1 clas mt-5>Titolo</h1>
            <hr />
            <h6>Descrizione:</h6>
            <p>Paragraph</p><label>Seleziona quantità: <select><optgroup label="This is a group"><option value="12" selected>This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></label></div>
    </div>
</div>
@endsection
