<?php $title='formulario'; include 'template/header.php'; ?>

<div style="height: 100vh">
    <div class="flex-center flex-column col-md-12">
        <form class="text-center border border-light p-5" action="#!">
            <p class="h4 mb-4">Subscribe</p>

            <p>Join our mailing list. We write rarely, but only the best content.</p>

            <p>
                <a href="" target="_blank">See the last newsletter</a>
            </p>
            <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Name">
            <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Name">
            <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Name">
            <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Name">
            <input type="text" id="defaultSubscriptionFormPassword" class="form-control mb-4" placeholder="Name">
            <input type="email" id="defaultSubscriptionFormEmail" class="form-control mb-4" placeholder="E-mail">
            <button class="btn btn-info btn-block" type="submit">Sign in</button>
        </form>
    </div>
</div>

<?php include 'template/footer.php'; ?>
<?php include 'template/script.php'; ?>