@include('common/header')
<body>

<div class="recyclableFrm">
    <form action="/recyclable" method="POST" enctype="multipart/form-data" class="form">
    @csrf
        <h1 class="title">Post your recyclable waste products</h1>

        <br>
        <div class="inputContainer">
            <input type="text" name="wasteName" class="input" placeholder="Enter the name" required>
            <label for="" class="label">Name</label><br><br>
        </div>
        <br>

        <div class="inputContainer">
            <input type="text" name="wasteDescription" class="input" placeholder="Enter the description" required>
            <label for="" class="label">Description</label>
        </div>


        <br>
        <div style="text-align:center;">
            <label>Upload Waste Product</label><br>
            <input type="file"  name="wasteImage" value="" />
        </div>
        <br>
        <div class="button">
            <input type="submit" name="uploadWasteProduct" class="btn" value="Submit">
        </div>
    </form>
</div>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>



