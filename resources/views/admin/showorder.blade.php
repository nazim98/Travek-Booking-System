<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')

  </head>
  <body>

      <!-- partial -->

      @include('admin.sidebar')

      @include('admin.navbar')

      <!-- partial -->

      <div class="container-fluid page-body-wrapper">

        <div class="container" style="text-align: center;">

            <table style="margin-left: auto; margin-right:auto;">
                <tr style="background-color: gray;">
                    <td style="padding: 20px;">Customer name</td>
                    <td style="padding: 20px;">Phone</td>
                    <td style="padding: 20px;">Address</td>
                    <td style="padding: 20px;">Product title</td>
                    <td style="padding: 20px;">Price</td>
                    <td style="padding: 20px;">Quantity</td>
                    <td style="padding: 20px;">Status</td>
                    <td style="padding: 20px;">Action</td>
                    <td style="padding: 20px;">Action 2</td>
                </tr>

                @foreach($order as $orders)

                <tr style="background-color: black;">
                    <td style="padding: 20px;">{{$orders->name}}</td>
                    <td style="padding: 20px;">{{$orders->phone}}</td>
                    <td style="padding: 20px;">{{$orders->address}}</td>
                    <td style="padding: 20px;">{{$orders->product_name}}</td>
                    <td style="padding: 20px;">{{$orders->price}}</td>
                    <td style="padding: 20px;">{{$orders->quantity}}</td>
                    <td style="padding: 20px;">{{$orders->status}}</td>
                    <td style="padding: 20px;"><a class="btn btn-success" href="{{url('updatestatus',$orders->id)}}">Delivered</a></td>
                    <td style="padding: 20px;"><a class="btn btn-danger" href="{{url('rejectstatus',$orders->id)}}">Reject</a></td>
                </tr>

                @endforeach
            </table>


        </div>

    </div>




      <!-- partial -->
      @include('admin.script')
  </body>
</html>
