<x-template>
    <x-navbar class="!bg-gradient-to-tr from-slate-700 to-black" />
    <div class="container mt-40">
        <h2>Upload Image</h2>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            
        @if ($message = Session::get('success'))
        
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    
        <div class="row">
            <div class="col-md-4">
                <strong>Original Image:</strong>
                <br/>
                <img src="/images/{{ Session::get('imageName') }}" width="300px" />
            </div>
            <div class="col-md-4">
                <strong>Thumbnail Image:</strong>
                <br/>
                <img src="/thumbnail/{{ Session::get('imageName') }}" />
            </div>
        </div>
        @endif
                
        <form action="/images/store" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <br/>
                    <input type="file" name="image" class="image">
                </div>
                <div class="col-md-12">
                    <br/>
                    <button type="submit" class="btn btn-negative">Upload Image</button>
                </div>
            </div>
        </form>
    </div>
</x-template>
