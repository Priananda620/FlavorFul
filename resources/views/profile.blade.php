@extends('layout')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-between">
            <!-- 1st column (left) -->
            <div class="col-lg-3 me-3">
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <img alt="User Avatar" class="rounded-circle ms-3" width="100" height="100"
                            src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=1170&amp;q=80">

                    </div>

                    <h2 class="fw-bold mt-3 text-truncate position-relative mx-auto mw-100" style="width: fit-content">
                        azhar620

                    </h2>

                    <p class="text-muted-color">Joined 17 June 2023
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

                <ul class="nav flex-row justify-content-between mb-4 fs-3">
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
                </ul>

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
                                                <div class="col-lg-9 col-md-8">azhar620</div>
                                            </div>

                                            <div class="row">
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
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label">Email</div>
                                                <div class="col-lg-9 col-md-8">prianandaazhar2001@gmail.com</div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">

                                            <!-- Profile Edit Form -->
                                            <form id="profile_update_data">
                                                <div class="row mb-3">
                                                    <label for="profileImage"
                                                        class="col-md-4 col-lg-3 col-form-label">Profile
                                                        Image</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <img id="upload-avatar-preview" class="w-50"
                                                            src="http://127.0.0.1:8000/storage/assets/user_images/3a204c21-29ff-4b59-851b-832372ae7f5b_azhar620.png"
                                                            alt="Profile">
                                                        <div class="pt-2">


                                                            <input style="display: none" id="user-pic-update"
                                                                type="file" name="user_profile_img">
                                                            <a id="upload-avatar-btn" class="btn bg-lifted-1 btn-sm"
                                                                title="Upload new profile image">


                                                                <i class="fa-solid fa-images"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="username"
                                                        class="col-md-4 col-lg-3 col-form-label">Username</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="username" type="text" class=""
                                                            id="username" value="azhar620">
                                                    </div>
                                                </div>



                                                <div class="row mb-3">
                                                    <label for="Job"
                                                        class="col-md-4 col-lg-3 col-form-label">Job</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="job" type="text" class="mt-0"
                                                            id="Job" value="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Country"
                                                        class="col-md-4 col-lg-3 col-form-label">Country</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input type="text" class="mt-0" id="Country"
                                                            disabled="" name="country" value="id">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Phone"
                                                        class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <div class="input-group">
                                                            <span class="input-group-text">+62</span>
                                                            <input id="Phone" name="phone" type="text"
                                                                style="border: none;color: var(--display-font-color);"
                                                                class="form-control w-auto mt-0"
                                                                placeholder="Phone number" value="87875587801">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Email"
                                                        class="col-md-4 col-lg-3 col-form-label">Email</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="email" type="email" class="mt-0"
                                                            id="Email" value="prianandaazhar2001@gmail.com">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter
                                                        Username</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="twitter_username" type="text" class="mt-0"
                                                            id="Twitter" value="">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Facebook"
                                                        class="col-md-4 col-lg-3 col-form-label">Facebook
                                                        Username</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="facebook_username" type="text" class="mt-0"
                                                            id="Facebook" value="azhar620">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Instagram"
                                                        class="col-md-4 col-lg-3 col-form-label">Instagram
                                                        Username</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="instagram_username" type="text" class="mt-0"
                                                            id="Instagram" value="azhar620">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label for="Linkedin"
                                                        class="col-md-4 col-lg-3 col-form-label">Linkedin
                                                        Username</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="linkedin_username" type="text" class="mt-0"
                                                            id="Linkedin" value="">
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

                                                <div class="row mb-3">
                                                    <div>
                                                        <label for="current_password">Current Password</label>
                                                        <input name="current_password" type="password" class=""
                                                            id="current_password">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div>
                                                        <label for="new_password">New Password</label>
                                                        <input name="new_password" type="password" class=""
                                                            id="new_password">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div>
                                                        <label for="new_password_2">Re-enter New Password</label>
                                                        <input name="new_password_2" type="password" class=""
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

                            <div class="d-flex flex-row align-items-center mb-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Your Saved Recipe..."
                                        aria-label="Search Your Saved Recipe..." aria-describedby="search">
                                    <button class="btn btn-danger" type="button" id="search"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
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
                            <div class="container">
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

            // const rowDiv = $('<div>', {
            //     'class': 'row'
            // })


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
                            `<svg xmlns='http://www.w3.org/2000/svg' width='${170}' height='${170}'><rect width='100%' height='100%' fill='${bgColor}' /></svg>`;
                        const dataURI = 'data:image/svg+xml,' + encodeURIComponent(svg);

                        const $row = $('<div>', {
                            'class': 'row'
                        });


                        let $rowEl;
                        response.collections.forEach((collection, index) => {
                            console.log(index);
                            if (index % 2 === 0) {
                                $rowEl = $('<div>', {
                                    'class': 'row'
                                });
                                console.log("ROWWWWWWWWWWWWWWWWWWWW");
                            }

                            let $div = $('<div>', {
                                'class': 'col p-4 rounded rippleEffect',
                                'html': $('<div>', {
                                    'class': 'd-flex flex-row',
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
                                            'alt': 'Image 2'
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
                                            'alt': 'Image 2'
                                        })
                                    ]
                                }),
                                'append': [
                                    $('<div>', {
                                        'class': 'd-flex flex-row',
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
                                                'alt': 'Image 2'
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
                                                'alt': 'Image 2'
                                            })
                                        ]
                                    }),
                                    $('<div>', {
                                        'class': 'fs-4 fw-bold mt-3',
                                        'text': collection.name
                                    })
                                ]
                            });

                            $rowEl.append($div);

                            if (index % 2 !== 0 || index === response.collections.length - 1) {
                                collectionContainer.append($rowEl);
                            }
                        });

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
        })
    </script>
@endsection
