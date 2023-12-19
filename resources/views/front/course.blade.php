@section('title')

{{$title}}

@endsection

@extends('front.layout')

@section('content')

<main>
        <section class="course-banner">
            <div class="container">
                <div class="img mb-4">
                    <img src="{{asset('front/assets/image/course banner.png')}}" alt="" class="img-fluid">
                </div>
                <div class="course-content">
                    <h2 class="my-2">{{$course->title}}</h2>
                    <p>{{$course->short_info}}</p>
                </div>
            </div>
        </section>
        <section class="course-progress">
            <div class="container">
                <!--h2 class="mb-3">PROGRESS - ( 30/ 100 )</h2>
                <div class="line-progress-bar mb-3">

                </div-->
            <div class="faq-container">
                <div class="faq-item faq-item-1">
                    <div class="faq-question">
                        <div class="head-title d-flex mb-2">
                            <div class="check-icon">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <h2>1. Module 1 - Name of module</h2>
                        </div>
                        <p>Description of the module ... Pariatur natus qui alias nostrum consectetur architecto accusamus. Tempore molestiae ipsa vitae.</p>
                    </div>
                    <div class="icon-container"><i class="fa-solid fa-chevron-down"></i></div>
                </div>
                <div class="faq-answer">
                    <div class="answer p-2 d-flex align-items-center mt-2">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>1. chapter title  Aliquid tenetur perferendis molestias atque cumque quis.</p>
                                <div class="revisti-link ms-auto"> <a href="module.html" class="play-chapter">Revisit</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="answer p-2 d-flex align-items-center">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>2. chapter title  Aliquid tenetur perferendis molestias atque cumque quis.</p>
                                <div class="revisti-link ms-auto"> <a href="" class="play-chapter">Play Chapter</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="answer p-2 d-flex align-items-center">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>3. chapter title  Aliquid tenetur perferendis molestias atque cumque quis.</p>
                                <div class="revisti-link ms-auto"> <a href="" class="play-chapter">Play Chapter</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="answer p-2 d-flex align-items-center">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>4. MCQ test for the module</p>
                                <div class="revisti-link ms-auto"> <a href="" class="play-chapter">Take Quiz</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item faq-item-2">
                    <div class="faq-question">
                        <div class="head-title d-flex mb-2">
                            <div class="check-icon">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <h2>2. Module 2 - Name of module</h2>
                        </div>
                        <p>Description of the module ... Pariatur natus qui alias nostrum consectetur architecto accusamus. Tempore molestiae ipsa vitae.</p>
                    </div>
                    <div class="icon-container"><i class="fa-solid fa-chevron-down"></i></div>
                </div>
                <div class="faq-answer">
                    <div class="answer p-2 d-flex align-items-center mt-2">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>1. chapter title  Aliquid tenetur perferendis molestias atque cumque quis.</p>
                                <div class="revisti-link ms-auto"> <a href="" class="play-chapter">Revisit</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="answer p-2 d-flex align-items-center">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon d-none">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>2. chapter title  Aliquid tenetur perferendis molestias atque cumque quis.</p>
                                <div class="revisti-link ms-auto"> <a href="" class="play-chapter">Play Chapter</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="answer p-2 d-flex align-items-center">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon d-none">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>3. chapter title  Aliquid tenetur perferendis molestias atque cumque quis.</p>
                                <div class="revisti-link ms-auto"> <a href="" class="play-chapter">Play Chapter</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="answer p-2 d-flex align-items-center">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon d-none">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>4. MCQ test for the module</p>
                                <div class="revisti-link ms-auto"> <a href="" class="play-chapter">Take Quiz</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item-lock">
                    <div class="faq-question">
                        <div class="head-title d-flex mb-2">
                            <div class="check-icon">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <h2>3. Module 3 - Name of module</h2>
                        </div>
                        <p>Description of the module ... Pariatur natus qui alias nostrum consectetur architecto accusamus. Tempore molestiae ipsa vitae.</p>
                    </div>
                    <div class="icon-container lock"><i class="fa-solid fa-lock"></i></div>
                </div>
                <div class="faq-answer lock">
                    <div class="answer p-2 d-flex align-items-center mt-2">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>1. chapter title  Aliquid tenetur perferendis molestias atque cumque quis.</p>
                                <div class="revisti-link ms-auto"> <a href="" class="play-chapter">Revisit</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="answer p-2 d-flex align-items-center">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>2. chapter title  Aliquid tenetur perferendis molestias atque cumque quis.</p>
                                <div class="revisti-link ms-auto"> <a href="" class="play-chapter">Play Chapter</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="answer p-2 d-flex align-items-center">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>3. chapter title  Aliquid tenetur perferendis molestias atque cumque quis.</p>
                                <div class="revisti-link ms-auto"> <a href="" class="play-chapter">Play Chapter</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="answer p-2 d-flex align-items-center">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>4. MCQ test for the module</p>
                                <div class="revisti-link ms-auto"> <a href="" class="play-chapter">Take Quiz</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq-item-lock">
                    <div class="faq-question">
                        <div class="head-title d-flex mb-2">
                            <div class="check-icon">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <h2>4. Module 4 - Name of module</h2>
                        </div>
                        <p>Description of the module ... Pariatur natus qui alias nostrum consectetur architecto accusamus. Tempore molestiae ipsa vitae.</p>
                    </div>
                    <div class="icon-container lock"><i class="fa-solid fa-lock"></i></div>
                </div>
                <div class="faq-answer lock">
                    <div class="answer p-2 d-flex align-items-center mt-2">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>1. chapter title  Aliquid tenetur perferendis molestias atque cumque quis.</p>
                                <div class="revisti-link ms-auto"> <a href="" class="play-chapter">Revisit</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="answer p-2 d-flex align-items-center">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>2. chapter title  Aliquid tenetur perferendis molestias atque cumque quis.</p>
                                <div class="revisti-link ms-auto"> <a href="" class="play-chapter">Play Chapter</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="answer p-2 d-flex align-items-center">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>3. chapter title  Aliquid tenetur perferendis molestias atque cumque quis.</p>
                                <div class="revisti-link ms-auto"> <a href="" class="play-chapter">Play Chapter</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="answer p-2 d-flex align-items-center">
                        <div class="dot"></div>
                        <div class="answer-content">
                            <div class="head-title d-flex align-items-center p-2">
                                <div class="check-icon">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                                <p>4. MCQ test for the module</p>
                                <div class="revisti-link ms-auto"> <a href="" class="play-chapter">Take Quiz</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>









@endsection