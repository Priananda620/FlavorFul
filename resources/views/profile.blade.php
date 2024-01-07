@extends('layout')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-between">
            <!-- 1st column (left) -->
            <div class="col-lg-3 me-3">
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <img alt="User Avatar" class="rounded-circle ms-3" width="100" height="100"
                            src="{{ asset('assets/userAvatars/' . auth()->user()->avatarUrl) }}">

                    </div>

                    <h2 class="fw-bold mt-3 text-truncate position-relative mx-auto mw-100" style="width: fit-content">
                        {{$user->username}}

                    </h2>

                    <p class="text-muted-color">Joined {{ $user->created_at->format('M Y')}}
                    </p>
                </div>

                {{-- <div class="d-flex justify-content-between">
                <div>
                    <h4 class="fw-bold">3</h4>
                    <p class="text-muted-color">Questions</p>
                </div>
                <div>
                    <h4 class="fw-bold">2</h4>
                    <p class="text-muted-color">Moderated</p>
                </div>
                <div>
                    <h4 class="fw-bold">6</h4>
                    <p class="text-muted-color">Answers</p>
                </div>
            </div>
            <div class="d-flex flex-wrap mb-2 pb-4">
                <span class="badge bg-light text-dark me-1 mt-1">1 factual&nbsp;<i class="fa-solid fa-circle-check"></i></span>
                <span class="badge bg-light text-dark me-1 mt-1">1 verified&nbsp;<i class="fa-solid fa-check-double"></i></span>
                <span class="badge bg-light text-dark me-1 mt-1">1 misleading</span>
                <span class="badge bg-light text-dark me-1 mt-1">0 potential false</span>
            </div> --}}

                {{-- <ul class="nav flex-row justify-content-between mb-4 fs-3">
                    <li class="nav-item bg-lifted ">
                        <a target="_blank" rel="noopener noreferrer" class="nav-link px-3 rounded-pill"
                            href="https://www.facebook.com/azhar620"><i class="fa-brands fa-facebook-f azhar620"></i></a>
                    </li>
                    <li class="nav-item bg-lifted ">
                        <a target="_blank" rel="noopener noreferrer" class="nav-link px-3 rounded-pill"><i
                                class="fa-brands fa-twitter unfocus-text"></i></a>
                    </li>
                    <li class="nav-item bg-lifted ">
                        <a target="_blank" rel="noopener noreferrer" class="nav-link px-3 rounded-pill"
                            href="https://www.instagram.com/azhar620"><i class="fa-brands fa-instagram azhar620"></i></a>
                    </li>
                    <li class="nav-item bg-lifted ">
                        <a target="_blank" rel="noopener noreferrer" class="nav-link px-3 rounded-pill"><i
                                class="fa-brands fa-linkedin unfocus-text"></i></a>
                    </li>
                </ul> --}}

            </div>

            <!-- 2nd column -->
            <div class="col-lg-8 mt-5">
                <ul class="nav nav-pills mb-3" role="tablist">


                    <li class="nav-item me-2" role="presentation">
                        <button class="nav-link active px-3 py-3 rounded-pill" data-bs-toggle="tab"
                            data-bs-target="#profile-details-tab" aria-selected="true" role="tab">Profile
                            Details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-3 py-3 rounded-pill" data-bs-toggle="tab"
                            data-bs-target="#current-user-saved-recipe" aria-selected="false" role="tab"
                            tabindex="-1">Saved Recipe</button>
                    </li>



                </ul>
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="profile-details-tab" role="tabpanel">
                        <div class="row rounded">
                            <div class="card cursor-unset">
                                <div class="card-body pt-3">
                                    <!-- Bordered Tabs -->
                                    <ul class="nav nav-pills" role="tablist">

                                        <li class="nav-item me-2 mt-2" role="presentation">
                                            <button class="nav-link active rounded-pill" data-bs-toggle="tab"
                                                data-bs-target="#profile-overview" aria-selected="true"
                                                role="tab">Overview</button>
                                        </li>

                                        <li class="nav-item me-2 mt-2" role="presentation">
                                            <button class="nav-link rounded-pill" data-bs-toggle="tab"
                                                data-bs-target="#profile-edit" aria-selected="false" role="tab"
                                                tabindex="-1">Edit Profile</button>
                                        </li>




                                        <li class="nav-item me-2 mt-2" role="presentation">
                                            <button class="nav-link rounded-pill" data-bs-toggle="tab"
                                                data-bs-target="#profile-change-password" aria-selected="false"
                                                role="tab" tabindex="-1">Change Password</button>
                                        </li>

                                    </ul>
                                    <div class="tab-content mt-4">

                                        <div class="tab-pane fade profile-overview active show" id="profile-overview"
                                            role="tabpanel">
                                            <h4 class="card-title mt-2">About</h4>
                                            <p class="small fst-italic">Your profile details should be accurate and
                                                up-to-date.
                                                Please ensure the information you provide is true and complete.
                                                We respect your privacy and will handle your profile details in accordance
                                                with your privacy regards.


                                            </p>
                                            <a class="badge bg-light text-dark me-1 mt-1" href="/about#community-guidelines"
                                                target="_blank" rel="noopener noreferrer">Community Guidelines&nbsp;<i
                                                    class="fa-solid fa-right-long"></i></a>

                                            <h4 class="card-title mt-4">Profile Details</h4>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label ">Username</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->username }}</div>
                                            </div>

                                            {{-- <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Job</div>
                                                <div class="col-lg-9 col-md-8">{<span id="threadList-totalData"
                                                        class="badge bg-secondary">empty</span>}</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Country</div>
                                                <div class="col-lg-9 col-md-8">ID</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Last Login IP</div>
                                                <div class="col-lg-9 col-md-8">127.0.0.1</div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                                <div class="col-lg-9 col-md-8">(62)87875587801</div>
                                            </div> --}}

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Email</div>
                                                <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">

                                            <!-- Profile Edit Form -->
                                            <form id="profile_update_data" method="POST" enctype="multipart/form-data">
                                                <div class="alert alert-danger mb-4 d-none" role="alert">
                                                    Validation Error
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="profileImage"
                                                        class="col-md-4 col-lg-3 col-form-label">Profile
                                                        Image</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <img id="upload-avatar-preview" class="w-50 rounded"
                                                            src="{{ asset('assets/userAvatars/' . auth()->user()->avatarUrl) }}"
                                                            alt="Profile">
                                                        <div class="pt-2">


                                                            <input style="display: none" id="user-pic-update"
                                                                type="file" name="user_profile_img">
                                                            <a id="upload-avatar-btn"
                                                                class="btn btn-secondary text-light rounded-pill btn-sm"
                                                                title="Upload new profile image">
                                                                upload
                                                                <i class="fa-solid fa-images"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="username"
                                                        class="col-md-4 col-lg-3 col-form-label">Username</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="username" type="text" class="form-control"
                                                            id="username" value="{{ $user->username }}">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Email"
                                                        class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="email" type="email" class="form-control"
                                                            id="Email" value="{{ $user->email }}">
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button id="update-data-save" type="submit"
                                                        class="btn btn-primary mt-3">Save Changes</button>
                                                </div>
                                            </form><!-- End Profile Edit Form -->

                                        </div>


                                        <div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">
                                            <!-- Change Password Form -->
                                            <form id="profile-change-password-form">
                                                <div class="alert alert-danger mb-4 d-none" role="alert">
                                                    Validation Error
                                                </div>
                                                <div class="row mb-3">
                                                    <div>
                                                        <label for="current_password" class="form-label">Current
                                                            Password</label>
                                                        <input name="current_password" type="password"
                                                            class="form-control" id="current_password"
                                                            autocomplete="off">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div>
                                                        <label for="new_password" class="form-label">New Password</label>
                                                        <input name="new_password" type="password" class="form-control"
                                                            id="new_password">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div>
                                                        <label for="new_password_2" class="form-label">Re-enter New
                                                            Password</label>
                                                        <input name="new_password_2" type="password" class="form-control"
                                                            id="new_password_2">
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit" id="change-password-submit"
                                                        class="btn btn-primary mt-3">Change Password</button>
                                                </div>
                                            </form><!-- End Change Password Form -->

                                        </div>

                                    </div><!-- End Bordered Tabs -->

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="current-user-saved-recipe" role="tabpanel">
                        <div class="row p-3 rounded">
                            <!-- Left child container -->

                            <div class="container" id="profile-collection-container">
                                <div class="row">

                                    <div class="col p-4 rounded rippleEffect ">
                                        <div class="d-flex flex-row">
                                            <img class="w-50 rounded-top-left border-end border-2 border-bottom"
                                                src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=170&amp;q=80"
                                                alt="Image 2">
                                            <img class="w-50 rounded-top-right border-start border-2 border-bottom"
                                                src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=170&amp;q=80"
                                                alt="Image 2">
                                        </div>
                                        <div class="d-flex flex-row">
                                            <img class="w-50 rounded-bottom-left border-end border-2 border-top"
                                                src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=170&amp;q=80"
                                                alt="Image 2">
                                            <img class="w-50 rounded-bottom-right border-start border-2 border-top"
                                                src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=170&amp;q=80"
                                                alt="Image 2">
                                        </div>
                                        <div class="fs-4 fw-bold mt-3">Food</div>
                                    </div>

                                    <div class="col p-4 rounded rippleEffect ">
                                        <div class="image-2-grid">
                                            <img class="w-100 rounded"
                                                src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=170&amp;q=80"
                                                alt="Image 2">
                                        </div>
                                        <div class="fs-4 fw-bold mt-3">Food</div>
                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col p-4 rounded rippleEffect ">
                                        <div class="image-2-grid">
                                            <img class="w-100 rounded"
                                                src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=170&amp;q=80"
                                                alt="Image 3">
                                        </div>
                                        <div class="fs-4 fw-bold mt-3">Food</div>
                                    </div>

                                    <div class="col p-4 rounded rippleEffect ">
                                        <div class="image-2-grid">
                                            <img class="w-100 rounded"src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=170&amp;q=80"
                                                alt="Image 4">
                                        </div>
                                        <div class="fs-4 fw-bold mt-3">Food</div>
                                    </div>
                                </div>
                            </div>

                            <div style="display: none;" id="collection-recipe-search">
                                <div class="d-flex flex-column align-items-center mb-3">
                                    <div class="w-100 my-2 d-inline-flex">
                                        <button class="btn btn-secondary my-auto" id="back-collection">
                                            <i class="fas fa-arrow-left"></i>
                                        </button>
                                        <p class="my-auto mx-2 fs-4">
                                            Return
                                        </p>
                                        <div class="badge bg-secondary ms-auto my-auto d-inline-flex align-items-center"
                                            style="padding-top: .5rem !important;padding-bottom: .5rem !important;">
                                            <i class="fa-solid fa-bookmark fa-xl me-2"></i>
                                            <h1 class="fs-4 fw-bold m-0">

                                            </h1>
                                        </div>
                                        <div class="container p-0 m-0 mx-2 w-auto position-relative">
                                            <div class="d-flex align-items-center">
                                                <button class="hamburger-menu btn" data-bs-toggle="collapse"
                                                    data-bs-target="#menuContent" aria-controls="menuContent"
                                                    aria-expanded="false" aria-label="Toggle menu">
                                                    <i class="fa-solid fa-ellipsis-vertical fs-1"></i>
                                                </button>
                                            </div>

                                            <div class="collapse position-absolute z-5 end-0" style="z-index: 100;"
                                                id="menuContent">
                                                <div class="card card-body">
                                                    <p class="p-2 m-0 cursor-pointer rippleEffect" data-bs-toggle="modal"
                                                        data-bs-target="#deleteConfirmationModal">Delete Collection</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="searchInput"
                                            placeholder="Search Your Saved Recipe..."
                                            aria-label="Search Your Saved Recipe..." aria-describedby="search">
                                        <button class="btn btn-danger" type="button"><i
                                                class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="container">

                                <!-- Delete Confirmation Modal -->
                                <div class="modal fade" id="deleteConfirmationModal" tabindex="-1"
                                    aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
                                    <div class="modal-dialog d-flex align-items-center w-100 h-100">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteConfirmationModalLabel">Delete
                                                    Collection</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this collection?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-3" id="profileQuestionCardResults">
                                <!-- Card 1 -->
                                <div class="skeleton-row p-4 skeleton"></div>
                                <div class="skeleton-row p-4 skeleton"></div>
                                <div class="skeleton-row p-4 skeleton"></div>
                                <div class="skeleton-row p-4 skeleton"></div>
                                <div class="skeleton-row p-4 skeleton"></div>
                                <div class="skeleton-row p-4 skeleton"></div>
                                <div class="skeleton-row p-4 skeleton"></div>
                                <div class="skeleton-row p-4 skeleton"></div>
                                <div class="skeleton-row p-4 skeleton"></div>
                            </div> --}}
                            <div class="container" id="collection-recipes" style="display: none;">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col">
                                        <div class="card rounded skeleton-card">
                                            <div class="col g-0">
                                                <div class="row-md-4">
                                                    <div class="skeleton-image h-100"></div>
                                                </div>
                                                <div class="row-md-8">
                                                    <div
                                                        class="card-body d-flex flex-column justify-content-between h-100">
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
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-3 rounded p-0">
                                            <div class="col g-0">
                                                <div class="row-md-4">
                                                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                                        class="img-fluid rounded h-100" alt="Image">
                                                </div>
                                                <div class="row-md-8">
                                                    <div
                                                        class="card-body d-flex flex-column justify-content-between h-100">
                                                        <h3 class="card-title fw-bold">Card Title</h3>
                                                        <div class="d-flex flex-row my-3">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex flex-column">
                                                                    <div class="recipe-stars w-fit-content">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex flex-column">
                                                                    <p class="m-0">
                                                                        <i class="fa-regular fa-clock"></i>
                                                                        <span>
                                                                            &lt; 10mins</span>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                                                            <div class="d-flex flex-nowrap">
                                                                <div class="me-2">
                                                                    <span
                                                                        class="badge bg-primary rounded-pill">Nut-Sensistive</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span
                                                                        class="badge bg-secondary rounded-pill">Nut-Sensistive</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-success rounded-pill">Badge
                                                                        3</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-primary rounded-pill">Badge
                                                                        1</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-secondary rounded-pill">Badge
                                                                        2</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-success rounded-pill">Badge
                                                                        3</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-secondary rounded-pill">Badge
                                                                        2</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-success rounded-pill">Badge
                                                                        3</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-3 rounded p-0">
                                            <div class="col g-0">
                                                <div class="row-md-4">
                                                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                                        class="img-fluid rounded h-100" alt="Image">
                                                </div>
                                                <div class="row-md-8">
                                                    <div
                                                        class="card-body d-flex flex-column justify-content-between h-100">
                                                        <h3 class="card-title fw-bold">Card Title</h3>
                                                        <div class="d-flex flex-row my-3">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex flex-column">
                                                                    <div class="recipe-stars w-fit-content">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex flex-column">
                                                                    <p class="m-0">
                                                                        <i class="fa-regular fa-clock"></i>
                                                                        <span>
                                                                            &lt; 10mins</span>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                                                            <div class="d-flex flex-nowrap">
                                                                <div class="me-2">
                                                                    <span
                                                                        class="badge bg-primary rounded-pill">Nut-Sensistive</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span
                                                                        class="badge bg-secondary rounded-pill">Nut-Sensistive</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-success rounded-pill">Badge
                                                                        3</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-primary rounded-pill">Badge
                                                                        1</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-secondary rounded-pill">Badge
                                                                        2</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-success rounded-pill">Badge
                                                                        3</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-secondary rounded-pill">Badge
                                                                        2</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-success rounded-pill">Badge
                                                                        3</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-3 rounded p-0">
                                            <div class="col g-0">
                                                <div class="row-md-4">
                                                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                                        class="img-fluid rounded h-100" alt="Image">
                                                </div>
                                                <div class="row-md-8">
                                                    <div
                                                        class="card-body d-flex flex-column justify-content-between h-100">
                                                        <h3 class="card-title fw-bold">Card Title</h3>
                                                        <div class="d-flex flex-row my-3">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex flex-column">
                                                                    <div class="recipe-stars w-fit-content">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex flex-column">
                                                                    <p class="m-0">
                                                                        <i class="fa-regular fa-clock"></i>
                                                                        <span>
                                                                            &lt; 10mins</span>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                                                            <div class="d-flex flex-nowrap">
                                                                <div class="me-2">
                                                                    <span
                                                                        class="badge bg-primary rounded-pill">Nut-Sensistive</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span
                                                                        class="badge bg-secondary rounded-pill">Nut-Sensistive</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-success rounded-pill">Badge
                                                                        3</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-primary rounded-pill">Badge
                                                                        1</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-secondary rounded-pill">Badge
                                                                        2</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-success rounded-pill">Badge
                                                                        3</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-secondary rounded-pill">Badge
                                                                        2</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-success rounded-pill">Badge
                                                                        3</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card mb-3 rounded p-0">
                                            <div class="col g-0">
                                                <div class="row-md-4">
                                                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80"
                                                        class="img-fluid rounded h-100" alt="Image">
                                                </div>
                                                <div class="row-md-8">
                                                    <div
                                                        class="card-body d-flex flex-column justify-content-between h-100">
                                                        <h3 class="card-title fw-bold">Card Title</h3>
                                                        <div class="d-flex flex-row my-3">
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex flex-column">
                                                                    <div class="recipe-stars w-fit-content">
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="fas fa-star"></i>
                                                                        <i class="far fa-star"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <div class="d-flex flex-column">
                                                                    <p class="m-0">
                                                                        <i class="fa-regular fa-clock"></i>
                                                                        <span>
                                                                            &lt; 10mins</span>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="overflow-auto hide-scrollbar1 hide-scrollbar2">
                                                            <div class="d-flex flex-nowrap">
                                                                <div class="me-2">
                                                                    <span
                                                                        class="badge bg-primary rounded-pill">Nut-Sensistive</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span
                                                                        class="badge bg-secondary rounded-pill">Nut-Sensistive</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-success rounded-pill">Badge
                                                                        3</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-primary rounded-pill">Badge
                                                                        1</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-secondary rounded-pill">Badge
                                                                        2</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-success rounded-pill">Badge
                                                                        3</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-secondary rounded-pill">Badge
                                                                        2</span>
                                                                </div>
                                                                <div class="me-2">
                                                                    <span class="badge bg-success rounded-pill">Badge
                                                                        3</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(() => {
            const requestHeaders = {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + $.cookie('api_plain_token')
            };

            $('#searchInput').on('input', function() {
                const searchQuery = $(this).val().toLowerCase();
                $('#collection-recipes > h3').remove()
                let isFound = false
                $('#collection-recipes .card').each(function() {
                    const cardText = $(this).text().toLowerCase();
                    const isVisible = cardText.includes(searchQuery);
                    $(this).parent().toggle(isVisible);
                    if (!isFound && isVisible) {
                        isFound = isVisible
                    }
                });

                if (!isFound && $('#collection-recipes .card').length) {
                    $('#collection-recipes').append(
                        `<h3 class="m-0 text-center mt-5 mb-4 w-100">Recipe Not Found</h3>`)
                }
            });

            $('body').on('click', '.collection-items', async function() {
                let search = $('#collection-recipe-search')
                let recipe = $('#collection-recipes')
                let collection = $('#profile-collection-container')

                const parentElement = collection.parent();

                parentElement.data('collectionState', $(this).find('.collection-data').data(
                    'collectionId'))
                console.log(parentElement.data('collectionState'))

                parentElement.css('min-height', parentElement.outerHeight() + 'px');

                search.find('h1').html($(this).find('.collection-data').data('collectionName'))

                collection.fadeOut(200);

                setTimeout(() => {
                    search.fadeIn(200);
                    recipe.fadeIn(200);
                }, 500);

                await delay(500)

                parentElement.css('min-height', '');

                getRecipeHandler(parentElement.data('collectionState'))

                // parent.attr('collectionid', $(this).attr('collectionid'))

                // console.log($(this).attr('collectionid'))

            })


            const skeleton = `<div class="col">
                                        <div class="card rounded skeleton-card">
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
                                        </div>
                                    </div>`

            $('body').on('click', '#back-collection', async function() {
                let search = $('#collection-recipe-search')
                let recipe = $('#collection-recipes')
                let collection = $('#profile-collection-container')

                const parentElement = collection.parent();
                parentElement.css('min-height', parentElement.outerHeight() + 'px');

                search.fadeOut(200);
                recipe.fadeOut(200);
                setTimeout(() => {
                    collection.fadeIn(200);
                }, 500);

                await delay(500)

                parentElement.css('min-height', '');

                const recipeContainer = $('#collection-recipes > .row')

                recipeContainer.empty()
                recipeContainer.append(skeleton)
                recipeContainer.append(skeleton)
            })

            $('body').on('click', '#collection-recipes .card', function(e) {
                window.location.href = 'recipe-details/' + $(this).data('recipeId').split("recipe_")[1];
                console.log("CLICK");
            });


            const getCollectionHandler = (() => {
                const collectionContainer = $('#profile-collection-container')

                $.ajax({
                    url: window.location.origin + "/api/" + 'get/collections',
                    type: 'GET',
                    data: {
                        offset: 0,
                        limit: 1000,
                    },
                    headers: requestHeaders,
                    success: function(response) {
                        console.log(response);
                        collectionContainer.empty()

                        const bgColor = '#f6f6f6';
                        const svg =
                            `<svg xmlns="http://www.w3.org/2000/svg" width="170" height="170" viewBox="0 0 512 512">
                                <rect width="100%" height="100%" fill="${bgColor}" />
                                <g width="100%" height="100%" >
                                    <path style="transform: scale(.3) translate(120%, 120%)" fill="#fff" d="M32 0C19.1 0 7.4 7.8 2.4 19.8s-2.2 25.7 6.9 34.9L224 269.3V448H160c-17.7 0-32 14.3-32 32s14.3 32 32 32h96 96c17.7 0 32-14.3 32-32s-14.3-32-32-32H288V269.3L502.6 54.6c9.2-9.2 11.9-22.9 6.9-34.9S492.9 0 480 0H32zM256 210.7L109.3 64H402.7L256 210.7z"/>
                                </g>
                            </svg>
                        `;
                        const dataURI = 'data:image/svg+xml,' + encodeURIComponent(svg);

                        const $row = $('<div>', {
                            'class': 'row'
                        });


                        let $rowEl;
                        $rowEl = $('<div>', {
                            'class': 'row'
                        });
                        response.collections.forEach((collection, index) => {
                            // console.log(index);
                            // if (index % 3 === 0) {

                            //     console.log("ROWWWWWWWWWWWWWWWWWWWW");
                            // }

                            let collectionData = $('<div>', {
                                'class': 'fs-5 fw-bold mt-3 collection-data',
                                'text': collection.name
                            })

                            collectionData.data('collectionName', collection.name)
                            collectionData.data('collectionId', collection.id)

                            let $div = $('<div>', {
                                'class': 'col-sm-6 col-lg-4 p-4 rounded rippleEffect collection-items d-flex justify-content-center flex-column align-items-center',
                                'collectionId': collection.id,
                                'html': $('<div>', {
                                    'class': 'd-flex flex-row',
                                    'style': 'width: 230px; height: 125px;',
                                    'html': [
                                        $('<img>', {
                                            'class': 'w-50 rounded-top-left border-end border-2 border-bottom',
                                            'src': collection
                                                .collectionImages[
                                                    0] ?
                                                collection
                                                .collectionImages[
                                                    0] :
                                                dataURI,
                                            'alt': collection
                                                .savedrecipe[
                                                    0] ?
                                                collection
                                                .savedrecipe[0]
                                                .recipe.title :
                                                ''
                                        }),
                                        $('<img>', {
                                            'class': 'w-50 rounded-top-right border-start border-2 border-bottom',
                                            'src': collection
                                                .collectionImages[
                                                    1] ?
                                                collection
                                                .collectionImages[
                                                    1] :
                                                dataURI,
                                            'alt': collection
                                                .savedrecipe[
                                                    1] ?
                                                collection
                                                .savedrecipe[1]
                                                .recipe.title :
                                                ''
                                        })
                                    ]
                                }),
                                'append': [
                                    $('<div>', {
                                        'class': 'd-flex flex-row',
                                        'style': 'width: 230px; height: 125px;',
                                        'html': [
                                            $('<img>', {
                                                'class': 'w-50 rounded-bottom-left border-end border-2 border-top',
                                                'src': collection
                                                    .collectionImages[
                                                        2] ?
                                                    collection
                                                    .collectionImages[
                                                        2] :
                                                    dataURI,
                                                'alt': collection
                                                    .savedrecipe[
                                                        2] ?
                                                    collection
                                                    .savedrecipe[
                                                        2]
                                                    .recipe
                                                    .title : ''
                                            }),
                                            $('<img>', {
                                                'class': 'w-50 rounded-bottom-right border-start border-2 border-top',
                                                'src': collection
                                                    .collectionImages[
                                                        3] ?
                                                    collection
                                                    .collectionImages[
                                                        3] :
                                                    dataURI,
                                                'alt': collection
                                                    .savedrecipe[
                                                        3] ?
                                                    collection
                                                    .savedrecipe[
                                                        3]
                                                    .recipe
                                                    .title : ''
                                            })
                                        ]
                                    }),
                                    collectionData
                                ]
                            });

                            $rowEl.append($div);

                            // if (index % 3 !== 0 || index === response.collections
                            //     .length - 1) {
                            //         collectionContainer.append($rowEl);
                            // }
                        });
                        collectionContainer.append($rowEl);

                    },
                    error: function(xhr, status, error) {
                        alert(error)
                    },
                    beforeSend: function() {

                    },
                    complete: function() {
                        // collectionContainer.empty()
                    }
                });
            })()



            const getRecipeHandler = (collectionId) => {
                const recipeContainer = $('#collection-recipes > .row')

                let cardTemp = `
            <div class="card mb-3 rounded p-0 rippleEffect">
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


                $.ajax({
                    url: window.location.origin + "/api/" + 'get/collection/recipes',
                    type: 'GET',
                    data: {
                        collectionId: collectionId,
                    },
                    headers: requestHeaders,
                    success: async function(response) {
                        console.log(response);
                        await delay(1000)
                        recipeContainer.empty()



                        if (response.recipes.length === 0) {
                            recipeContainer.append(
                                `<h3 class="m-0 text-center mt-5 mb-4 w-100">Collection Empty</h3>`
                            )
                        }

                        response.recipes.forEach((recipe, index) => {
                            const recipeTitle = recipe.title;
                            const recipeImage = recipe.image;
                            const recipePopularityScore = recipe.popularity_score;
                            const recipeViewCount = recipe.view_count;
                            const recipe_like_count = recipe.recipe_like_count;
                            const saved_recipe_count = recipe.saved_recipe_count;
                            const totalReview = recipe.comment.length;

                            const totalRating = recipe.comment.reduce((sum, comment) =>
                                sum +
                                comment.rating, 0);
                            const avgRating = (totalRating / totalReview).toFixed(1);

                            ////////////////////////
                            let temp = cardTemp
                            ////////////////////////

                            temp = temp.replace('{image}', recipeImage)
                            temp = temp.replaceAll('{label}', recipeTitle)
                            temp = temp.replace('{totalScore}', recipePopularityScore)
                            temp = temp.replace('{totalView}', recipeViewCount)
                            temp = temp.replace('{totalLike}', recipe_like_count)
                            temp = temp.replace('{totalSaved}', saved_recipe_count)
                            temp = temp.replace('{totalReview}', totalReview)
                            temp = temp.replace('{rating}', !isNaN(avgRating) ? avgRating :
                                '0.0')

                            const starsSolid = new Array((Math.round(avgRating) > 0 ? (Math
                                .round(avgRating)) : 0) + 1).join(
                                '<i class="fas fa-star"></i>')
                            const starsHollow = new Array((Math.round(avgRating) > 0 ? (5 -
                                Math.round(avgRating)) : 5) + 1).join(
                                '<i class="far fa-star"></i>')

                            temp = temp.replace('{stars}', starsSolid + starsHollow)

                            let $temp = $(temp)
                            $temp.data('recipeId', recipe.edamamId)


                            let $cardContainer = $('<div>', {
                                'class': 'col'
                            }).append($temp);

                            recipeContainer.append($cardContainer)
                        });

                    },
                    error: function(xhr, status, error) {
                        alert(error)
                    },
                    beforeSend: function() {
                        recipeContainer.empty()
                        recipeContainer.append(skeleton)
                        recipeContainer.append(skeleton)
                    },
                    complete: function() {}
                });
            }

            const avatarInput = $('#user-pic-update');
            const avatarPreview = $('#upload-avatar-preview');

            $('#upload-avatar-btn').on('click', function() {
                avatarInput.trigger('click');
            })

            avatarInput.on('change', function(event) {
                if (event.target.files && event.target.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(event) {
                        avatarPreview.attr('src', event.target.result);
                    };

                    reader.readAsDataURL(event.target.files[0]);
                }
            });

            $('form#profile_update_data').on('submit', function(e) {
                e.preventDefault()
                const alert = $(this).find('.alert')
                alert.addClass('d-none')

                const formData = new FormData($(this)[0]);

                console.log(formData.get('username'))
                console.log(formData.get('email'))

                const headers = {
                    'Accept': 'application/json',
                    'Authorization': requestHeaders['Authorization']
                };

                $.ajax({
                    url: window.location.origin + "/api/" + 'update-profile',
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    data: formData,
                    headers: headers,
                    success: function(response) {
                        alert.removeClass('alert-danger')
                        alert.addClass('alert-success')
                        alert.removeClass('d-none')
                        alert.html('Profile Successfully Updated')

                    },
                    error: function(xhr, status, error) {


                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            var errors = xhr.responseJSON.errors;

                            $.each(errors, function(field, messages) {
                                $.each(messages, function(index, message) {
                                    alert.removeClass('alert-success')
                                    alert.addClass('alert-danger')
                                    alert.removeClass('d-none')
                                    alert.html(message)
                                });
                            });
                        } else {
                            console.log('Unexpected error: ' + error);
                        }
                    },
                    beforeSend: function() {
                        alert.addClass('d-none')
                    },
                    complete: function() {}
                });
            })

            $('form#profile-change-password-form').on('submit', function(e) {
                e.preventDefault()
                const alert = $(this).find('.alert')
                alert.addClass('d-none')

                const currPass = $(this).find('input[name="current_password"]').val()
                const newPass = $(this).find('input[name="new_password"]').val()
                const newPass2 = $(this).find('input[name="new_password_2"]').val()

                if (currPass.length === 0 || newPass.length === 0 || newPass2.length === 0) {
                    alert.removeClass('d-none')

                    return
                }

                console.log(currPass)
                console.log(newPass)
                console.log(newPass2)

                $.ajax({
                    url: window.location.origin + "/api/" + 'change-password',
                    type: 'POST',
                    data: JSON.stringify({
                        current_password: currPass,
                        new_password: newPass,
                        new_password_2: newPass2
                    }),
                    headers: requestHeaders,
                    success: function(response) {
                        alert.removeClass('alert-danger')
                        alert.addClass('alert-success')
                        alert.removeClass('d-none')
                        alert.html('Password Successfully Changed')

                    },
                    error: function(xhr, status, error) {


                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            var errors = xhr.responseJSON.errors;

                            $.each(errors, function(field, messages) {
                                $.each(messages, function(index, message) {
                                    alert.removeClass('alert-success')
                                    alert.addClass('alert-danger')
                                    alert.removeClass('d-none')
                                    alert.html(message)
                                });
                            });
                        } else {
                            console.log('Unexpected error: ' + error);
                        }
                    },
                    beforeSend: function() {
                        alert.addClass('d-none')
                    },
                    complete: function() {}
                });
            })

        })
    </script>
@endsection
