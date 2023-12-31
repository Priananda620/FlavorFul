@extends('layout')
@section('content')
    <div class="container pt-5" id="popular-container">
        <h1 class="fw-bold mt-5">
            Popular Recipe
        </h1>
        <div class="row my-5">


        </div>
        <div class="row my-5">



        </div>
        <div class="row my-5">
            <h2 class="fw-bold my-4">
                Other Populars
            </h2>
            <div class="col">
                <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                    <div class="d-flex flex-row flex-nowrap gap-2">

                        {{-- --------------------------------------------------------------------------------- --}}


                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(() => {
            $('body').on('click', '.card', function(e) {
                window.location.href = 'recipe-details/' + $(this).data('recipeId').split("recipe_")[1];
                console.log("CLICK");
            });

            let cardTemp = `
            <div class="card mb-3 rounded col-3 rippleEffect">
                            <div class="col g-0">
                                <div class="row-md-4">
                                    <img src="{image}"
                                        class="img-fluid rounded h-100 w-100" alt="{label}">
                                </div>
                                <div class="row-md-8">
                                    <div class="card-body d-flex flex-column justify-content-between h-100">
                                        <h3 class="card-title fw-bold line-clamp-2">{label}</h3>
                                        <div class="d-inline-flex mb-3" id="avg-rating">

                                            <div class="recipe-stars w-fit-content">
                                                {stars}
                                                <span class="ms-1">{rating}</span>
                                            </div>

                                            <div class="ms-2">({totalReview} Review)</div>
                                        </div>
                                        <div class="d-flex flex-row my-3">
                                            <div class="flex-grow-1">
                                                <div class="d-flex flex-row">
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill fs-6">
                                                            <i class="fa-heart fa-solid me-2"></i><span
                                                                class="pe-2">{totalLike}</span>
                                                            <i class="fa-bookmark fa-solid ps-2 border-start border-2 border-secondary me-2"></i><span>{totalSaved}</span>
                                                        </span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill fs-6">
                                                            <span class="me-2">{totalView}</span><i class="fa-solid fa-eye"></i>
                                                        </span>
                                                    </div>
                                                    <div class="me-2">
                                                        <span class="badge bg-success rounded-pill fs-6">
                                                            <span class="me-2">{totalScore}</span><i
                                                                class="fa-solid fa-fire-flame-curved"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
            `

            let cardWide = `
            <div class="card mb-3 rounded col-md-6 col-lg-6 p-1 rippleEffect">
                <div class="col g-0">
                    <div class="row-md-4">
                        <img src="{image}"
                            class="img-fluid rounded h-100" alt="Image" style="max-height: 25em;min-height: 25em;width: 100%;">
                    </div>
                    <div class="row-md-8">
                        <div class="card-body d-flex flex-column justify-content-between h-100">
                            <h3 class="card-title fw-bold">{label}</h3>
                            <div class="d-inline-flex mb-3" id="avg-rating">


                                <div class="recipe-stars w-fit-content">
                                    {stars}
                                    <span class="ms-1">{rating}</span>
                                </div>

                                <div class="ms-2">({totalReview} Review)</div>
                            </div>
                            <div class="d-flex flex-row my-3">
                                <div class="flex-grow-1">
                                    <div class="d-flex flex-row">
                                        <div class="me-2">
                                            <span class="badge bg-success rounded-pill fs-6">
                                                <i class="fa-heart fa-solid me-2"></i><span class="pe-2">{totalLike}</span>
                                                <i class="fa-bookmark fa-solid ps-2 border-start border-2 border-secondary me-2"></i><span>{totalSaved}</span>
                                            </span>
                                        </div>
                                        <div class="me-2">
                                            <span class="badge bg-success rounded-pill fs-6">
                                                <span class="me-2">{totalView}</span><i class="fa-solid fa-eye"></i>
                                            </span>
                                        </div>
                                        <div class="me-2">
                                            <span class="badge bg-success rounded-pill fs-6">
                                                <span class="me-2">{totalScore}</span><i class="fa-solid fa-fire-flame-curved"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            `
            let skeletonCard = `<div class="{cardClasses}">
                                <div class="col g-0">
                                    <div class="row-md-4">
                                        <div class="skeleton-image h-100"></div>
                                    </div>
                                    <div class="row-md-8">
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <div class="skeleton-title"></div>
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <div class="skeleton-info"></div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="skeleton-info"></div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="skeleton-info"></div>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="flex-grow-1 me-2">
                                                    <div class="skeleton-info rounded-pill py-3"></div>
                                                </div>
                                                <div class="flex-grow-1 me-2">
                                                    <div class="skeleton-info rounded-pill py-3"></div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="skeleton-info rounded-pill py-3"></div>
                                                </div>
                                            </div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>`
            const skeletonCardWide = skeletonCard.replace('{cardClasses}',
                'card mb-3 rounded col-3 w-100')
            skeletonCard = skeletonCard.replace('{cardClasses}',
                'card mb-3 rounded col-3 w-sm-100 w-md-50 w-lg-30 w-100')

            // const wideCard = `<div class="card mb-3 rounded col-3 w-100 p-1">
        //     <div class="col g-0">
        //         <div class="row-md-4">
        //             <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
        //                 class="img-fluid rounded h-100" alt="Image" style="max-height: 14em;width: 100%;">
        //         </div>
        //         <div class="row-md-8">
        //             <div class="card-body d-flex flex-column justify-content-between h-100">
        //                 <h3 class="card-title fw-bold">Frothy Iced Matcha Green Tea Recipe</h3>
        //                 <div class="d-inline-flex mb-3" id="avg-rating">


        //                     <div class="recipe-stars w-fit-content"><i class="fas fa-star"></i><i
        //                             class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        //                         <i class="far fa-star"></i><span class="ms-1">2.0</span>
        //                     </div>

        //                     <div class="ms-2">(8 Review)</div>
        //                 </div>
        //                 <div class="d-flex flex-row my-3">
        //                     <div class="flex-grow-1">
        //                         <div class="d-flex flex-row">
        //                             <div class="me-2">
        //                                 <span class="badge bg-success rounded-pill fs-6">
        //                                     <i class="fa-heart fa-solid me-2"></i><span class="pe-2">15</span>
        //                                     <i
        //                                         class="fa-bookmark fa-solid ps-2 border-start border-2 border-secondary me-2"></i><span>15</span>
        //                                 </span>
        //                             </div>
        //                             <div class="me-2">
        //                                 <span class="badge bg-success rounded-pill fs-6">
        //                                     <span class="me-2">15</span><i class="fa-solid fa-eye"></i>
        //                                 </span>
        //                             </div>
        //                             <div class="me-2">
        //                                 <span class="badge bg-success rounded-pill fs-6">
        //                                     <span class="me-2">15</span><i class="fa-solid fa-fire-flame-curved"></i>
        //                                 </span>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <div class="flex-grow-1">
        //                     </div>
        //                 </div>
        //             </div>
        //         </div>
        //     </div>
        // </div>`

            const popularContainer = $('#popular-container > .row')

            const requestHeaders = {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + $.cookie('api_plain_token')
            };

            const getPopular = (() => {
                $.ajax({
                    url: window.location.origin + "/api/" + 'get/popular_recipe',
                    type: 'GET',
                    headers: requestHeaders,
                    success: function(response) {
                        popularContainer.eq(2).find('> .col > div > .d-flex').empty()
                        popularContainer.eq(0).empty()
                        popularContainer.eq(1).empty()

                        $('h2.fw-bold').append(' ('+(response.total-4)+')')
                        
                        for (let i = 0; i < response.total; i++) {
                            const recipe = response.recipes[i];
                            const recipeTitle = recipe.title;
                            const recipeImage = recipe.image;
                            const recipePopularityScore = recipe.popularity_score;
                            const recipeViewCount = recipe.view_count;
                            const recipe_like_count = recipe.recipe_like_count;
                            const saved_recipe_count = recipe.saved_recipe_count;
                            const totalReview = recipe.comment.length;

                            const totalRating = recipe.comment.reduce((sum, comment) => sum +
                                comment.rating, 0);
                            const avgRating = (totalRating / totalReview).toFixed(1);

                            let temp
                            if(i<4){
                                temp = cardWide
                            }else{
                                temp = cardTemp
                            }
                            

                            temp = temp.replace('{image}', recipeImage)
                            temp = temp.replaceAll('{label}', recipeTitle)
                            temp = temp.replace('{totalScore}', recipePopularityScore)
                            temp = temp.replace('{totalView}', recipeViewCount)
                            temp = temp.replace('{totalLike}', recipe_like_count)
                            temp = temp.replace('{totalSaved}', saved_recipe_count)
                            temp = temp.replace('{totalReview}', totalReview)
                            temp = temp.replace('{rating}', !isNaN(avgRating) ? avgRating :
                                '0.0')

                            const starsSolid = new Array((Math.round(avgRating) > 0 ? (Math.round(avgRating)) : 0) + 1).join('<i class="fas fa-star"></i>')
                            const starsHollow = new Array((Math.round(avgRating) > 0 ? (5 - Math.round(avgRating)) : 5) + 1).join('<i class="far fa-star"></i>')

                            temp = temp.replace('{stars}', starsSolid+starsHollow)

                            let $temp = $(temp)
                            $temp.data('recipeId', recipe.edamamId)

                            if(i<4){
                                if(i<2){
                                    popularContainer.eq(0).append($temp)
                                }else{
                                    popularContainer.eq(1).append($temp)
                                }
                                
                            }else{
                                popularContainer.eq(2).find('> .col > div > .d-flex').append($temp)
                            }
                            
                        }

                    },
                    error: function(error) {
                        console.error(error);
                    },
                    beforeSend: function() {
                        popularContainer.eq(0).append(skeletonCardWide)
                        popularContainer.eq(1).append(skeletonCardWide)

                        popularContainer.eq(2).find('> .col > div > .d-flex').empty()
                        popularContainer.eq(2).find('> .col > div > .d-flex').append(
                            skeletonCard)
                        popularContainer.eq(2).find('> .col > div > .d-flex').append(
                            skeletonCard)
                        popularContainer.eq(2).find('> .col > div > .d-flex').append(
                            skeletonCard)
                        popularContainer.eq(2).find('> .col > div > .d-flex').append(
                            skeletonCard)

                        // popularContainer.eq(2).find('.col > div > .d-flex').append(skeletonCard)
                        // popularContainer.eq(2).find('.col > div > .d-flex').append(skeletonCard)
                        // popularContainer.eq(2).find('.col > div > .d-flex').append(skeletonCard)
                        // popularContainer.eq(2).find('.col > div > .d-flex').append(skeletonCard)
                    },
                    complete: function() {}
                });

            })()
        })
    </script>
@endsection
