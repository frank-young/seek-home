<template>
    <div class="row img-batch-wrap">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" v-for="(img,i) in imgArr">
                  <div class="img" >
                      <img :src="'/storage/' + img.src" alt="">
                      <a class="img-batch-del" @click="del(i)">
                        删除
                      </a>
                  </div>
                </div>
            </div>

            <div class="upload">
                <form @submit.prevent="submit" name="loginForm" enctype="multipart/form-data">
                    <input type="hidden" name="_token" :value="token">
                    <div class="btn-wrap">
                        <input class="btn u-file" type="file" name="file">
                        <span class="btn btn-info btn-line btn-radius u-borwer">浏览</span>
                        <input class="btn btn-info btn-radius u-submit" type="submit" value="上传">
                    </div>

                </form>
            </div>
        </div>

    </div>
</template>

<script>
    const ERR_OK = 0
    // const PATH = '/storage/'

    export default {
        props: {
            pathArr: {
                type: Array
            }
        },
        data() {
            return {
                token: window.Laravel.csrfToken,
                src: '',
                imgArr: []
            }
        },
        created() {
            console.log(this.pathArr)
            if(this.pathArr.length !== 0){
              this.imgArr = JSON.parse(this.pathArr)
              this.$parent.imagePathArr = JSON.stringify(this.imgArr)
                // this.imgArr = this.pathArr
                // this.$parent.imagePathArr = this.pathArr
                // if (this.src !== ''){
                //   this.src = PATH + this.path
                //   this.$parent.imagePath = this.path
                // } else {
                //   this.src = '/seek-home/public/images/banner.jpg'
                //   this.$parent.imagePath = '/seek-home/public/images/banner.jpg'
                // }
            }

        },
        methods: {
            del (i) {
              this.imgArr.splice(i,1);
              this.$parent.imagePathArr = JSON.stringify(this.imgArr)
            },
            submit(event) {
                let options = {}
                let formData = new FormData(event.target)

                options.headers = {'Content-Type': 'application/x-www-form-urlencoded'}
                options.emulateJSON = true

                this.$http.post('/image/upload', formData, options).then((res) => {
                    res = res.body
                    if (res.errno === ERR_OK) {
                        let obj = {
                          src: res.path
                        }
                        this.imgArr.push(obj)
                        this.$parent.imagePathArr = JSON.stringify(this.imgArr)
                    }
                })
            }
        }
    }
</script>

<style lang="less" scpoed>
    .img-batch-wrap {
        .img{
            position: relative;
            height: 100px;
            margin-bottom: 20px;
            margin-top: 10px;
            overflow: hidden;
            border-radius: 5px;
            box-shadow: 3px 3px 8px #ccc;
            img {
                width: 100px;
                height: 100px;
            }
            .img-batch-del {
              position: absolute;
              bottom: 0;
              left: 0;
              z-index: 1;
              width: 100%;
              height: 30px;
              line-height: 30px;
              color: #fff;
              background: rgba(0, 0, 0, 0.6);
              text-align: center;
              text-decoration: none;
              cursor: pointer;
            }
        }
        .upload {
            padding-bottom: 15px;
            border-bottom: 1px solid #f2f6f8;
            margin-bottom: 30px;
            .btn-wrap {
                position: relative;
                height: 35px;
                .btn {
                    position: absolute;
                    top: 0;
                    left: 0;
                }
                .u-file {
                    display: block;
                    width: 70px;
                    opacity: 0;
                    filter: alpha(opacity=0);
                    z-index: 1;
                    outline: none;
                    cursor: pointer;
                }
                .u-borwer {
                    z-index: 0;
                }
                .u-submit{
                    left: 100px;
                }
            }
        }
    }
</style>
