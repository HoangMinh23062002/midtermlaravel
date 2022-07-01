@include('head')
<div class="container beta-relative">
    <div class="pull-left">
        <h2>Add product</h2>
    </div>
<div class="container">
        <form action="/add-form" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for='inputName'>Name_product</label>
                <input type="text" class="form-control" name="inputName"  placeholder="Enter name">
            </div>
             @error('inputName')
                <span style="color: red">{{$message}}</span>
            @enderror

            <div class="form-group">
                <label for='inputPrice'>Old Price</label>
                <input type="number" min=10000 class="form-control" name="inputPrice" id="inputPrice" placeholder="Enter price">
            </div>
             @error('inputPrice')
            <span style="color: red">{{$message}}</span>
                @enderror

            <div class="form-group">
                <label for='inputPromotionPrice'>New Price</label>
                <input type="number" min=10000 class="form-control" name="inputPromotionPrice" id="inputPromotionPrice" placeholder="Enter promotion price">
            </div>
                 @error('inputPromotionPrice')
                     <span style="color: red">{{$message}}</span>
                 @enderror
            <div class="form-group">
                <label for='inputImage'>Image file</label>
                <input type="file" class="form-control-file" name="inputImage" id="inputImage">
            </div>
                    @error('inputImage')
                            <span style="color: red">{{$message}}</span>
                    @enderror
            <div class="form-group">
                <img id="preview-image-before-upload" src="/source/image/product/" alt="preview image" style="max-height: 250px;">
                <script type="text/javascript">
                    $(document).ready(function(e) {
                        $('#inputImage').change(function() {
                            let reader = new FileReader();
                            reader.onload = (e) => {
                                $('#preview-image-before-upload').attr('src', e.target.result);
                            }
                            reader.readAsDataURL(this.files[0]);
                        });
                    });
                </script>
            </div>

            <div class="form-group">
                <label for='inputDescription'>Description</label>
                <textarea name="inputDescription"></textarea>
                  @error('inputDescription')
                     <span style="color: red">{{$message}}</span>
                 @enderror
                <script>
                    CKEDITOR.replace('inputDescription');
                </script>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
</form>