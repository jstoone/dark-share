@extends('layouts.master')

@section("content")
    <div id="snippets" class="row index">
        <div class="col-md-12">
            <form action="{{ route('snippets.create') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <input type="hidden" name="mode" value=""/>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Title">
                </div>

                <div class="js-mode-changers">
                    <button class="btn btn-success" href="#" type="button" data-id="htmlmixed">HTML</button>
                    <button class="btn btn-success" href="#" type="button" data-id="sass">SASS</button>
                    <button class="btn btn-success" href="#" type="button" data-id="php">PHP</button>
                    <button class="btn btn-success" href="#" type="button" data-id="javascript">Javascript</button>
                    <button class="btn btn-success" href="#" type="button" data-id="markdown">Markdown</button>
                </div>

                <hr/>

                <textarea name="body" id="the-editor" style="display: none;">var lol = 'lol';</textarea>

            </form>
        </div>
    </div>
@stop