<script setup>
import Projects from "./Projects.vue";
defineProps({ skills: Object, projects: Object });
</script>
<template>
    <section
        id="portfolio"
        class="section bg-light-primary dark:bg-dark-primary min-h-[700px]"
    >
        <div class="container mx-auto">
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My Latest Work</h2>
                <p class="subtitle">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Cupiditate nostrum animi neque illo
                </p>
            </div>
        </div>
        <Projects :skills="skills" :projects="projects" />
    </section>
</template>
