@extends('tabler::layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row g-2 align-items-center">
        <div class="col">
          <h2 class="page-title">
            Frequently Asked Questions
          </h2>
        </div>
        <!-- Page title actions -->
        <div class="col-12 col-md-auto ms-auto d-print-none">
          <div class="d-flex">
            <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
              <li class="breadcrumb-item"><a href="#">Tabler</a></li>
              <li class="breadcrumb-item"><a href="#">Pages</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="#">Frequently Asked Questions</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="card card-lg">
        <div class="card-body">
          <div class="space-y-4">
            <div>
              <h2 class="mb-3">1. Introduction</h2>
              <div id="faq-1" class="accordion" role="tablist" aria-multiselectable="true">
                <div class="accordion-item">
                  <div class="accordion-header" role="tab">
                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq-1-1">Welcome to our service!</button>
                  </div>
                  <div id="faq-1-1" class="accordion-collapse collapse show" role="tabpanel" data-bs-parent="#faq-1">
                    <div class="accordion-body pt-0">
                      <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" role="tab">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-2">Who are we?</button>
                  </div>
                  <div id="faq-1-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-1">
                    <div class="accordion-body pt-0">
                      <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" role="tab">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-1-3">What are our values?</button>
                  </div>
                  <div id="faq-1-3" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-1">
                    <div class="accordion-body pt-0">
                      <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <h2 class="mb-3">2. Functionality</h2>
              <div id="faq-2" class="accordion" role="tablist" aria-multiselectable="true">
                <div class="accordion-item">
                  <div class="accordion-header" role="tab">
                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq-2-1">What are the key features?</button>
                  </div>
                  <div id="faq-2-1" class="accordion-collapse collapse show" role="tabpanel" data-bs-parent="#faq-2">
                    <div class="accordion-body pt-0">
                      <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" role="tab">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2-2">Does your App support mobile devices?</button>
                  </div>
                  <div id="faq-2-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-2">
                    <div class="accordion-body pt-0">
                      <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" role="tab">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2-3">Why should I choose your service?</button>
                  </div>
                  <div id="faq-2-3" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-2">
                    <div class="accordion-body pt-0">
                      <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" role="tab">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2-4">Is my data secure?</button>
                  </div>
                  <div id="faq-2-4" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-2">
                    <div class="accordion-body pt-0">
                      <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <h2 class="mb-3">3. Payments</h2>
              <div id="faq-3" class="accordion" role="tablist" aria-multiselectable="true">
                <div class="accordion-item">
                  <div class="accordion-header" role="tab">
                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq-3-1">Is there any free plan?</button>
                  </div>
                  <div id="faq-3-1" class="accordion-collapse collapse show" role="tabpanel" data-bs-parent="#faq-3">
                    <div class="accordion-body pt-0">
                      <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" role="tab">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-3-2">What are the available payment options?</button>
                  </div>
                  <div id="faq-3-2" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-3">
                    <div class="accordion-body pt-0">
                      <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header" role="tab">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-3-3">Can I get a refund?</button>
                  </div>
                  <div id="faq-3-3" class="accordion-collapse collapse" role="tabpanel" data-bs-parent="#faq-3">
                    <div class="accordion-body pt-0">
                      <div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias dignissimos dolorum ea est eveniet, excepturi illum in iste iure maiores nemo recusandae rerum saepe sed, sunt totam! Explicabo, ipsa?</p>
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
@endsection