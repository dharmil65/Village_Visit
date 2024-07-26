<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>
<title>Village Visit Login</title>
	<?php include 'main-header.php'; ?>
	<style>.menu-area {
    display: none;
}</style>
<body>
 <div class="container d-flex justify-content-center align-items-center mt-3">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Village Visit Login</h2>
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
	</div>
</body>
<?php include 'main-footer.php'; ?>
</html>