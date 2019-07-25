<template>
	<div class="wrapper ">
       <div class="content">
         <div class="d-flex align-items-center bg-image" style="height: 100vh;background-image: url('/img/bg2.jpg')">
            <div class="container">
          <!-- your content here -->
              <div class="row justify-content-center">
                  <div class="col-md-7">
                      <div class="card">
                          <div class="card-header card-header-warning">
                              <h4 class="m-0">Sign In</h4>
                          </div>
                          <div class="card-body">
                            <form>
                              <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                              </div>
                              <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <button type="submit" class="btn btn-warning">Sign in</button>
                            </form>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
         </div>
      </div>
  </div>
</template>

<script>
export default {

  name: 'login',

  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>