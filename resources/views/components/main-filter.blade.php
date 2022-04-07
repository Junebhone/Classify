<div class="flex ml-auto gap-2">
    <button
        class="flex border text-sm md:text-base border-gray-400 hover:border-black items-center justify-center gap-2 rounded-full p-4 sm:px-5 sm:py-2"
        type="submit" id="delete-btn">
        <i class="fa-solid fa-sliders"></i>
        <span class="hidden sm:flex">Filter</span>
    </button>
</div>

<script>
    window.addEventListener('DOMContentLoaded', () =>{
        const overlay = document.querySelector('#overlay')
        const delBtn = document.querySelector('#delete-btn')
        const closeBtn = document.querySelector('#close-modal')

        const toggleModal = () => {
            overlay.classList.toggle('hidden')
            overlay.classList.toggle('flex')
        }

        delBtn.addEventListener('click', toggleModal);
        closeBtn.addEventListener('click', toggleModal);
    })
    function filterResults(){
        let href = 'all-listings?';
        var title = document.getElementById("title").value;
        var country = document.getElementById("country").value;
        var category = document.getElementById("category").value;
        var maxPrice = document.getElementById("maxPrice").value;
        if(title.length){
            href += 'filter[title]=' + title;

        }
        if(category.length){
            
            href +='&filter[category_id]=' + category
        }

        if(country.length){
            
            href +='&filter[country_id]=' + country
        }
        if(maxPrice.length){
            href +='&filter[max_price]=' + maxPrice
        }
        document.location.href = href;
    }
    document.getElementById("filter").addEventListener("click",filterResults);
</script>