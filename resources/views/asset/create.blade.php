@extends('layout.master')
@section('content')
    <div class="panel panel-u">
        <div class="panel-heading">
            <h2 class="heading color-light">Upload Asset To STEM Curriculum</h2>
        </div>

        <div class="panel-body">
            {!!Form::open(['action'=> 'AssetController@store','class'=>'sky-form','method'=>'post','files'=>'true'])!!}
            <fieldset>
                <section>
                    <section>
                        <label class="label">File input</label>
                        <label for="file" class="input input-file">
                            <div class="button"><input type="file" id="file" name="asset" onchange="$('#path').val(this.files[0].name)">Browse</div><input type="text" readonly="" id="path">
                        </label>
                    </section>
                </section>
            </fieldset>
            <footer>
                <div class="col-md-6 col-sm-12">
                    <button type="submit" class="btn-u btn-block curl-bottom-right">Upload Asset</button>
                </div>
            </footer>
            {!!Form::close()!!}
            </form>
        </div>
    </div>
@stop
