    @include("../partials/head")
    @include('partials.header')

    <section class="crate-form_section">
         <div class="top-container__hero">
        </div>
        <div class="section-title">
            <div class="container align-center">
                <h2 class="title">Create a new comic</h2>
            </div>
        </div>
        <div class="section-form">
            <div class="container">
                <form action="/create" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Some random Comic">
                            </div>
                            <div class="col-6">
                                <label for="series">Series</label>
                                <input type="text" name="series" id="series" class="form-control" placeholder="Some random Series">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" class="form-control" placeholder="9.99">
                            </div>
                            <div class="col-6">
                                <label for="sale_date">Sale Date</label>
                                <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="02/05/2022">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="image">Image Url</label>
                                <input type="text" name="image" id="image" class="form-control" placeholder="https://www.example.com/image.png">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="10" maxlength="1150px"></textarea>
                            </div>
                        </div>
                        <div class="row jc-end">
                            <div class="col-3">
                                <a href="/">
                                    <div class="btn btn-secondary">
                                        <p>
                                            Cancel
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </section>


    @include('partials.footer')

        </body>
</html>
