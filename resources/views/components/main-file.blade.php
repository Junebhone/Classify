<script>
    FilePond.registerPlugin(
    
    FilePondPluginImagePreview,
    FilePondPluginImageExifOrientation,
    // FilePondPluginFileValidateSize,
    // // FilePondPluginImageEdit
    );
    
    const inputElement = document.querySelector('#user_avater');
    // Create a FilePond instance
    const pond = FilePond.create(inputElement);
    FilePond.setOptions({
        server: {
            process: '/upload',
            revert: '/upload/delete',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        },
    });
    // Select the file input and use create() to turn it into a pond
    FilePond.create(
        document.querySelector("input[id='user_avater']")
    );
</script>