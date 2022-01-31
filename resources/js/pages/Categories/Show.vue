<template>
    <div>
        <Header 
        :title="posts[0].category.name"
        subtitle="">
        </Header>

        <main>
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-6">
                        <PostCard v-for="(post, i) in posts" 
                        :key="post.id + i" 
                        :postData="post">
                        </PostCard>
                    </div>
                </div>
              
              <!-- <span>
                  {{post.created_at}}
              </span> -->
          </div>
        </main>
    </div>
</template>

<script>
import Header from '../../components/partials/Header.vue'
import PostCard from '../../components/partials/PostCard.vue'

export default {
    name: 'CategoryShow',
    components: { Header, PostCard },
    data (){
        return {
            posts: []
        }
    },
    methods: {
        fetchData() {
            window.axios.get('/api/category/' + this.$route.params.category).then((res) => {
                this.posts = res.data.posts
            })
        }
    },
    mounted() {
        this.fetchData()
    }
}
</script>

<style>

</style>