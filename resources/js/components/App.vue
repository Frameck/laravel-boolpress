<template>
    <div class="overflow-hidden">
        <Header></Header>

        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center my-5 mx-3">
            <PostCard
            v-for="(post, i) in postsList"
            :key="post.id + i"
            :postData="post">
            </PostCard>
        </div>

        <Footer></Footer>
    </div>
</template>

<script>
import Footer from './partials/Footer.vue'
import Header from './partials/Header.vue'
import PostView from './partials/PostView.vue'
import PostCard from './partials/PostCard.vue'

export default {
    name: 'App',
    components: { Footer, Header, PostCard, PostView },
    data() {
        return {
            postsList: []
        }
    },
    methods: {
        getData() {
            window.axios.get("/api/posts").then((res) => {
                console.log(res.data.data)
                this.postsList = res.data.data
            })
        },
    },
    mounted() {
        this.getData()
    }
}
</script>

<style>

</style>