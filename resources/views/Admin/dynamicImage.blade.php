<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload and Crop</title>
    <!-- Include Cropper CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.11/cropper.min.css" rel="stylesheet">
    <style>
        #previewImage {
            max-width: 100%;
            max-height: 400px;
            /* Adjust max-height as needed */
        }

        .message {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            z-index: 9999;
        }

        .success {
            background-color: green;
        }

        .error {
            background-color: red;
        }
    </style>
</head>

<body>
    <h2>Upload and Crop Image</h2>
    <form id="imageForm" action="{{ url('/') }}/Admin/dynamicImage" method="post" enctype="multipart/form-data">
        @csrf
        <label for="image_title">Title</label>
        <input type="text" name="image_title" id="image_title"><br>

        <label for="web_category">Web Category</label>
        <select name="web_category" id="web_category">
            <option value="academy testimonials">academy testimonials</option>
            <option value="event testimonials">event testimonials</option>
            <option value="course testimonials">course testimonials</option>
        </select><br>
        <input type="file" id="imageInput" name="image">
        <button type="submit">Upload & Crop</button>
    </form>

    <!-- Display Cropped Image -->
    <div>
        <h3>Cropped Image</h3>
        <img id="croppedImage" src="" alt="Cropped Image">
    </div>

    <!-- Include Cropper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.11/cropper.min.js"></script>
    <script>
        // Initialize Cropper
        var imageInput = document.getElementById('imageInput');
        var cropper;

        imageInput.addEventListener('change', function(e) {
            var files = e.target.files;
            var reader = new FileReader();
            reader.onload = function() {
                var image = document.createElement('img');
                image.src = reader.result;
                image.id = 'previewImage';
                document.body.appendChild(image);
                cropper = new Cropper(image, {
                    aspectRatio: 1 / 1, // You can adjust aspect ratio as needed
                    viewMode: 1, // Set viewMode to 1 for manual cropping
                    zoomable: true, // Enable zooming
                    scalable: false, // Disable scaling
                    crop: function(event) {
                        // You can track crop event if needed
                        console.log(event.detail.x);
                        console.log(event.detail.y);
                        console.log(event.detail.width);
                        console.log(event.detail.height);
                    }
                });
            }
            reader.readAsDataURL(files[0]);
        });

        // Handle Form Submission
        var imageForm = document.getElementById('imageForm');
        imageForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get the cropped image data
            var canvas = cropper.getCroppedCanvas();
            var croppedImage = canvas.toDataURL();

            // Append the cropped image data to the form data
            var formData = new FormData(imageForm);
            formData.append('croppedImage', croppedImage);

            // Make an AJAX request to submit the form
            fetch(imageForm.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (response.ok) {
                        // Form submission successful, show success message
                        showMessage('success', 'Image uploaded successfully.');
                    } else {
                        // Form submission failed, show error message
                        showMessage('error', 'Failed to upload image. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error submitting form:', error);
                    // Show error message
                    showMessage('error', 'An unexpected error occurred. Please try again later.');
                })
                .finally(() => {
                    // Hide Cropping Area
                    cropper.destroy(); // Destroy the cropper instance
                    var previewImage = document.getElementById('previewImage');
                    previewImage.parentNode.removeChild(previewImage); // Remove the preview image
                });
        });

        // Function to show messages
        function showMessage(type, message) {
            var messageElement = document.createElement('div');
            messageElement.className = 'message ' + type;
            messageElement.textContent = message;
            document.body.appendChild(messageElement);

            // Remove message after 3 seconds
            setTimeout(function() {
                messageElement.parentNode.removeChild(messageElement);
            }, 3000);
        }
    </script>

</body>

</html>
