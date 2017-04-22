<template>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4" v-for="d in data">
        <div class="thumbnail">
          <div class="caption">
            <h3>{{d.title}}</h3>
            <p>{{d.description}}</p>
            <p>
              <a :href="'./example/' + d.id" class="btn btn-primary" role="button">详情</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
    export default {
      props: {
        data: {
          type: Array
        }
      },
      data() {
        return {
        }
      }
    }
</script>
