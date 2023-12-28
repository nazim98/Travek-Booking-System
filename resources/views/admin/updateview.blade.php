<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">

        .title
        {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        label
        {
            display: inline-block;
            width: 200px;
        }

        </style>

    <base href="/public">

    @include('admin.css')

  </head>
  <body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- partial -->

      @include('admin.sidebar')

      @include('admin.navbar')

      <!-- partial -->

      <div class="container-fluid page-body-wrapper">

        <div class="container" style="text-align: center;">
            <h1 class="title">ADD PRODUCT</h1>

            @if(session()->has('message'))

            <div class="alert alert-success">

            <button style="float: right;" type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

            </div>

            @endif

            <form action="{{url('updateproduct',$data->id)}}" method="post" enctype="multipart/form-data">

                @csrf

            <div style="padding:15px;">
                <label>Product title</label>

                <input style="color: black;" type="text" name="title" value="{{$data->title}}"
                required="">
            </div>


            <div style="padding:15px;">
                <label>Price</label>

                <input style="color: black;" type="number" name="price" value="{{$data->price}}"
                required="">
            </div>


            <div style="padding:15px;">
                <label>Description</label>

                <input style="color: black;" type="text" name="des" value="{{$data->description}}"
                required="">
            </div>


            <div style="padding:15px;">
                <label>Quantity</label>

                <input style="color: black;" type="text" name="quantity" value="{{$data->quantity}}"
                required="">
            </div>

            <div style="padding:15px;">
                <label>Old Image</label>

                <img  style="margin-right: auto; margin-left: auto; padding: 7px;" height="200" width="200" src="/productimage/{{$data->image}}">
            </div>


            <div style="padding:15px;">
                <label>Change the image</label>
                <input type="file" name="file">
            </div>


            <div class="btn btn-success" style="padding:15px;">
                <input type="submit">
            </div>

        </form>

        </div>

    </div>


      <!-- partial -->
      @include('admin.script')
  </body>
</html>
