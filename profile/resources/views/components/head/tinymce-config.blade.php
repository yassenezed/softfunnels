<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.4.1/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
  tinymce.init({
  selector: 'textarea#editor',
  plugins: 'powerpaste advcode table lists checklist',
  toolbar: 'undo redo | blocks| bold italic | bullist numlist checklist | code | table',
  images_upload_url: '{{ asset('img') }}',
  images_upload_credentials: true,
  images_upload_handler: function (blobInfo, success, failure) {
  }
});


</script>
