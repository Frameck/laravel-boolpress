<template>
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Post image-->
            <img class="card-img-top" :src="postData.img" :alt="postData.title" />
            <!-- Post details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Post name-->
                    <h5 class="mb-3">{{ postData.title }}</h5>
                    <!-- Category -->
                    <span class="bg-secondary rounded-pill py-1 px-2 text-light">{{ postData.category.name }}</span>
                    <!-- Description-->
                    <p class="mt-3">{{ postData.description }}</p>
                </div>
            </div>
            <!-- Post actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center">
                    <router-link class="btn btn-outline-dark mt-auto" 
                    :to="{ name: 'posts.show', params: { slug: postData.slug } }">
                        View details
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PostCard',
    props: { postData: Object },
    mounted() {
        console.log(this.postData)
    }
}
</script>

<style>

</style>