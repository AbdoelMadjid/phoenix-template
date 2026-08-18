@extends('layouts.vertical')

@section('title', 'Color')

@push('styles')
    <link href="{{ asset('vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
@endpush

@section('content')
    <h2 class="mb-2 lh-sm">Color</h2>
    <p class="text-body-tertiary lead mb-2">Phoenix is supported by an extensive color system that themes our styles and
        components. This enables more comprehensive customization and extension for any project.</p>
    <div class="card mb-3 mt-7">
        <div class="card-header">
            <h5 class="fs-6" data-anchor="data-anchor">Colors</h5>
            <p>Phoenix comes with lots of colors and variants. We added <code>quaternary </code>and <code>body-highlight
                </code>colors besides <code>secondary </code>and <code>tertiary </code>colors and also theme colors shades.
            </p>
        </div>
        <div class="card-body">
            <div class="table-responsive scrollbar">
                <table class="table table-swatches">
                    <thead>
                        <tr>
                            <th class="ps-0" style="width: 20%; min-width: 100px">Name </th>
                            <th style="width: 20%; min-width: 130px">Swatch </th>
                            <th style="width: 40%; min-width: 330px">CSS variables </th>
                            <th style="width: 20%; min-width: 230px">Class </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ----- scope start --------->
                        <tr>
                            <td rowspan="2"><strong>Body </strong></td>
                            <td class="ps-0">
                                <div class="p-5 rounded-2" style="background-color: var(--phoenix-body-color)"></div>
                            </td>
                            <td><code>--phoenix-body-color</code><br><code>--phoenix-body-color-rgb</code></td>
                            <td><code>text-body</code></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="p-5 rounded-2" style="background-color: var(--phoenix-body-bg)"></div>
                            </td>
                            <td> <code>--phoenix-body-bg</code><br><code>--phoenix-body-bg-rgb</code></td>
                            <td> <code>bg-body</code></td>
                        </tr><!-- ----- scope end ---------->
                        <!-- ----- scope start -------->
                        <tr>
                            <td rowspan="2"><strong class="text-capitalize">secondary</strong></td>
                            <td class="ps-0">
                                <div class="p-5 rounded-2" style="background-color: var(--phoenix-secondary-color)"></div>
                            </td>
                            <td><code>--phoenix-secondary-color</code><br><code>--phoenix-secondary-color-rgb</code></td>
                            <td><code>text-body-secondary</code></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="p-5 rounded-2" style="background-color: var(--phoenix-secondary-bg)"></div>
                            </td>
                            <td> <code>--phoenix-secondary-bg</code><br><code>--phoenix-secondary-bg-rgb</code></td>
                            <td> <code>bg-body-secondary</code></td>
                        </tr>
                        <tr>
                            <td rowspan="2"><strong class="text-capitalize">tertiary</strong></td>
                            <td class="ps-0">
                                <div class="p-5 rounded-2" style="background-color: var(--phoenix-tertiary-color)"></div>
                            </td>
                            <td><code>--phoenix-tertiary-color</code><br><code>--phoenix-tertiary-color-rgb</code></td>
                            <td><code>text-body-tertiary</code></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="p-5 rounded-2" style="background-color: var(--phoenix-tertiary-bg)"></div>
                            </td>
                            <td> <code>--phoenix-tertiary-bg</code><br><code>--phoenix-tertiary-bg-rgb</code></td>
                            <td> <code>bg-body-tertiary</code></td>
                        </tr>
                        <tr>
                            <td rowspan="2"><strong class="text-capitalize">quaternary</strong></td>
                            <td class="ps-0">
                                <div class="p-5 rounded-2" style="background-color: var(--phoenix-quaternary-color)"></div>
                            </td>
                            <td><code>--phoenix-quaternary-color</code><br><code>--phoenix-quaternary-color-rgb</code></td>
                            <td><code>text-body-quaternary</code></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="p-5 rounded-2" style="background-color: var(--phoenix-quaternary-bg)"></div>
                            </td>
                            <td> <code>--phoenix-quaternary-bg</code><br><code>--phoenix-quaternary-bg-rgb</code></td>
                            <td> <code>bg-body-quaternary</code></td>
                        </tr>
                        <tr>
                            <td rowspan="2"><strong class="text-capitalize">body-highlight</strong></td>
                            <td class="ps-0">
                                <div class="p-5 rounded-2" style="background-color: var(--phoenix-body-highlight-color)">
                                </div>
                            </td>
                            <td><code>--phoenix-body-highlight-color</code><br><code>--phoenix-body-highlight-color-rgb</code>
                            </td>
                            <td><code>text-body-highlight</code></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="p-5 rounded-2" style="background-color: var(--phoenix-body-highlight-bg)"></div>
                            </td>
                            <td> <code>--phoenix-body-highlight-bg</code><br><code>--phoenix-body-highlight-bg-rgb</code>
                            </td>
                            <td> <code>bg-body-highlight</code></td>
                        </tr>
                        <tr>
                            <td rowspan="2"><strong class="text-capitalize">emphasis</strong></td>
                            <td class="ps-0">
                                <div class="p-5 rounded-2" style="background-color: var(--phoenix-emphasis-color)"></div>
                            </td>
                            <td><code>--phoenix-emphasis-color</code><br><code>--phoenix-emphasis-color-rgb</code></td>
                            <td><code>text-body-emphasis</code></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="p-5 rounded-2" style="background-color: var(--phoenix-emphasis-bg)"></div>
                            </td>
                            <td> <code>--phoenix-emphasis-bg</code><br><code>--phoenix-emphasis-bg-rgb</code></td>
                            <td> <code>bg-body-emphasis</code></td>
                        </tr>
                        <tr>
                            <td rowspan="7"><strong class="text-capitalize">primary</strong></td>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-primary"></div>
                            </td>
                            <td><code>--phoenix-primary</code><br><code>--phoenix-primary-rgb</code></td>
                            <td><code>text-primary</code><br><code>bg-primary</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-primary-subtle"></div>
                            </td>
                            <td><code>--phoenix-primary-bg-subtle</code></td>
                            <td><code>text-primary-subtle</code><br><code>bg-primary-subtle</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-primary-lighter"></div>
                            </td>
                            <td><code>--phoenix-primary-lighter</code><br><code>--phoenix-primary-lighter-rgb</code></td>
                            <td><code>text-primary-lighter</code><br><code>bg-primary-lighter</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-primary-light"></div>
                            </td>
                            <td><code>--phoenix-primary-light</code><br><code>--phoenix-primary-light-rgb</code></td>
                            <td><code>text-primary-light</code><br><code>bg-primary-light</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-primary-dark"></div>
                            </td>
                            <td><code>--phoenix-primary-dark</code><br><code>--phoenix-primary-dark-rgb</code></td>
                            <td><code>text-primary-dark</code><br><code>bg-primary-dark</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-primary-darker"></div>
                            </td>
                            <td><code>--phoenix-primary-darker</code><br><code>--phoenix-primary-darker-rgb</code></td>
                            <td><code>text-primary-darker</code><br><code>bg-primary-darker</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-primary-emphasis"></div>
                            </td>
                            <td><code>--phoenix-primary-text-emphasis</code></td>
                            <td><code>text-primary-emphasis</code><br><code>bg-primary-emphasis</code></td>
                        </tr>
                        <tr>
                            <td rowspan="7"><strong class="text-capitalize">secondary</strong></td>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-secondary"></div>
                            </td>
                            <td><code>--phoenix-secondary</code><br><code>--phoenix-secondary-rgb</code></td>
                            <td><code>text-secondary</code><br><code>bg-secondary</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-secondary-subtle"></div>
                            </td>
                            <td><code>--phoenix-secondary-bg-subtle</code></td>
                            <td><code>text-secondary-subtle</code><br><code>bg-secondary-subtle</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-secondary-lighter"></div>
                            </td>
                            <td><code>--phoenix-secondary-lighter</code><br><code>--phoenix-secondary-lighter-rgb</code>
                            </td>
                            <td><code>text-secondary-lighter</code><br><code>bg-secondary-lighter</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-secondary-light"></div>
                            </td>
                            <td><code>--phoenix-secondary-light</code><br><code>--phoenix-secondary-light-rgb</code></td>
                            <td><code>text-secondary-light</code><br><code>bg-secondary-light</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-secondary-dark"></div>
                            </td>
                            <td><code>--phoenix-secondary-dark</code><br><code>--phoenix-secondary-dark-rgb</code></td>
                            <td><code>text-secondary-dark</code><br><code>bg-secondary-dark</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-secondary-darker"></div>
                            </td>
                            <td><code>--phoenix-secondary-darker</code><br><code>--phoenix-secondary-darker-rgb</code></td>
                            <td><code>text-secondary-darker</code><br><code>bg-secondary-darker</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-secondary-emphasis"></div>
                            </td>
                            <td><code>--phoenix-secondary-text-emphasis</code></td>
                            <td><code>text-secondary-emphasis</code><br><code>bg-secondary-emphasis</code></td>
                        </tr>
                        <tr>
                            <td rowspan="7"><strong class="text-capitalize">success</strong></td>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-success"></div>
                            </td>
                            <td><code>--phoenix-success</code><br><code>--phoenix-success-rgb</code></td>
                            <td><code>text-success</code><br><code>bg-success</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-success-subtle"></div>
                            </td>
                            <td><code>--phoenix-success-bg-subtle</code></td>
                            <td><code>text-success-subtle</code><br><code>bg-success-subtle</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-success-lighter"></div>
                            </td>
                            <td><code>--phoenix-success-lighter</code><br><code>--phoenix-success-lighter-rgb</code></td>
                            <td><code>text-success-lighter</code><br><code>bg-success-lighter</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-success-light"></div>
                            </td>
                            <td><code>--phoenix-success-light</code><br><code>--phoenix-success-light-rgb</code></td>
                            <td><code>text-success-light</code><br><code>bg-success-light</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-success-dark"></div>
                            </td>
                            <td><code>--phoenix-success-dark</code><br><code>--phoenix-success-dark-rgb</code></td>
                            <td><code>text-success-dark</code><br><code>bg-success-dark</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-success-darker"></div>
                            </td>
                            <td><code>--phoenix-success-darker</code><br><code>--phoenix-success-darker-rgb</code></td>
                            <td><code>text-success-darker</code><br><code>bg-success-darker</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-success-emphasis"></div>
                            </td>
                            <td><code>--phoenix-success-text-emphasis</code></td>
                            <td><code>text-success-emphasis</code><br><code>bg-success-emphasis</code></td>
                        </tr>
                        <tr>
                            <td rowspan="7"><strong class="text-capitalize">danger</strong></td>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-danger"></div>
                            </td>
                            <td><code>--phoenix-danger</code><br><code>--phoenix-danger-rgb</code></td>
                            <td><code>text-danger</code><br><code>bg-danger</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-danger-subtle"></div>
                            </td>
                            <td><code>--phoenix-danger-bg-subtle</code></td>
                            <td><code>text-danger-subtle</code><br><code>bg-danger-subtle</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-danger-lighter"></div>
                            </td>
                            <td><code>--phoenix-danger-lighter</code><br><code>--phoenix-danger-lighter-rgb</code></td>
                            <td><code>text-danger-lighter</code><br><code>bg-danger-lighter</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-danger-light"></div>
                            </td>
                            <td><code>--phoenix-danger-light</code><br><code>--phoenix-danger-light-rgb</code></td>
                            <td><code>text-danger-light</code><br><code>bg-danger-light</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-danger-dark"></div>
                            </td>
                            <td><code>--phoenix-danger-dark</code><br><code>--phoenix-danger-dark-rgb</code></td>
                            <td><code>text-danger-dark</code><br><code>bg-danger-dark</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-danger-darker"></div>
                            </td>
                            <td><code>--phoenix-danger-darker</code><br><code>--phoenix-danger-darker-rgb</code></td>
                            <td><code>text-danger-darker</code><br><code>bg-danger-darker</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-danger-emphasis"></div>
                            </td>
                            <td><code>--phoenix-danger-text-emphasis</code></td>
                            <td><code>text-danger-emphasis</code><br><code>bg-danger-emphasis</code></td>
                        </tr>
                        <tr>
                            <td rowspan="7"><strong class="text-capitalize">warning</strong></td>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-warning"></div>
                            </td>
                            <td><code>--phoenix-warning</code><br><code>--phoenix-warning-rgb</code></td>
                            <td><code>text-warning</code><br><code>bg-warning</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-warning-subtle"></div>
                            </td>
                            <td><code>--phoenix-warning-bg-subtle</code></td>
                            <td><code>text-warning-subtle</code><br><code>bg-warning-subtle</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-warning-lighter"></div>
                            </td>
                            <td><code>--phoenix-warning-lighter</code><br><code>--phoenix-warning-lighter-rgb</code></td>
                            <td><code>text-warning-lighter</code><br><code>bg-warning-lighter</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-warning-light"></div>
                            </td>
                            <td><code>--phoenix-warning-light</code><br><code>--phoenix-warning-light-rgb</code></td>
                            <td><code>text-warning-light</code><br><code>bg-warning-light</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-warning-dark"></div>
                            </td>
                            <td><code>--phoenix-warning-dark</code><br><code>--phoenix-warning-dark-rgb</code></td>
                            <td><code>text-warning-dark</code><br><code>bg-warning-dark</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-warning-darker"></div>
                            </td>
                            <td><code>--phoenix-warning-darker</code><br><code>--phoenix-warning-darker-rgb</code></td>
                            <td><code>text-warning-darker</code><br><code>bg-warning-darker</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-warning-emphasis"></div>
                            </td>
                            <td><code>--phoenix-warning-text-emphasis</code></td>
                            <td><code>text-warning-emphasis</code><br><code>bg-warning-emphasis</code></td>
                        </tr>
                        <tr>
                            <td rowspan="7"><strong class="text-capitalize">info</strong></td>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-info"></div>
                            </td>
                            <td><code>--phoenix-info</code><br><code>--phoenix-info-rgb</code></td>
                            <td><code>text-info</code><br><code>bg-info</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-info-subtle"></div>
                            </td>
                            <td><code>--phoenix-info-bg-subtle</code></td>
                            <td><code>text-info-subtle</code><br><code>bg-info-subtle</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-info-lighter"></div>
                            </td>
                            <td><code>--phoenix-info-lighter</code><br><code>--phoenix-info-lighter-rgb</code></td>
                            <td><code>text-info-lighter</code><br><code>bg-info-lighter</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-info-light"></div>
                            </td>
                            <td><code>--phoenix-info-light</code><br><code>--phoenix-info-light-rgb</code></td>
                            <td><code>text-info-light</code><br><code>bg-info-light</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-info-dark"></div>
                            </td>
                            <td><code>--phoenix-info-dark</code><br><code>--phoenix-info-dark-rgb</code></td>
                            <td><code>text-info-dark</code><br><code>bg-info-dark</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-info-darker"></div>
                            </td>
                            <td><code>--phoenix-info-darker</code><br><code>--phoenix-info-darker-rgb</code></td>
                            <td><code>text-info-darker</code><br><code>bg-info-darker</code></td>
                        </tr>
                        <tr>
                            <td class="ps-0">
                                <div class="p-5 rounded-2 bg-info-emphasis"></div>
                            </td>
                            <td><code>--phoenix-info-text-emphasis</code></td>
                            <td><code>text-info-emphasis</code><br><code>bg-info-emphasis</code></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1050">
        <div class="toast align-items-center text-white bg-dark border-0" id="icon-copied-toast" role="alert"
            aria-live="assertive" aria-atomic="true">
            <div class="d-flex" data-bs-theme="dark">
                <div class="toast-body p-3"></div><button class="btn-close me-2 m-auto" type="button"
                    data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('vendors/prism/prism.js') }}"></script>
@endpush
