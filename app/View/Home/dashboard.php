<style>
    .container {
        max-width: 800px;
        margin: auto;
        padding: 40px 20px;
        text-align: center;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 20px;
        padding: 40px 0;
    }

    .col-lg-7 {
        flex: 1 1 58%;
        text-align: center;
    }

    .col-lg-5 {
        flex: 1 1 38%;
        max-width: 400px;
        margin: auto;
    }

    h1 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .form-container {
        padding: 20px;
        border-radius: 8px;
        border: 1px solid #ddd;
        background-color: #f8f9fa;
    }

    .btn {
        display: block;
        width: 90%;
        padding: 12px;
        font-size: 18px;
        font-weight: bold;
        color: white;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        margin-bottom: 10px;
        border: none;
    }

    .btn-primary {
        background-color: #0d6efd;
    }

    .btn-primary:hover {
        background-color: #0b5ed7;
    }

    .btn-danger {
        background-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #bb2d3b;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-7">
            <h1>Hello <?= $data['user']['name'] ?? '' ?></h1>
        </div>
        <div class="col-lg-5">
            <div class="form-container">
                <a href="/character/form" class="btn btn-primary">Intermezzo</a>
                <a href="/users/edit" class="btn btn-primary">Update Profile</a>
                <a href="/users/logout" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</div>
