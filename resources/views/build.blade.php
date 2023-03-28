<x-template>
    <x-how-can-i-help-you />

    <x-build-website-1 />

    <script>
        // Build radio buttons
        var buildRadioButtons = document.getElementsByClassName('build-radio-btn');

        [].forEach.call(buildRadioButtons, el => {
          el.onclick = function () {
            el.classList.toggle('bg-red-500');
            el.classList.toggle('!-translate-y-0');
            el.classList.toggle('scale-75');
          }
        });
        
    </script>
</x-template>