import { defineConfig } from 'vite'

export default defineConfig({
    plugins: [],
    build: {
        manifest: true,
        outDir: 'dist',
        rollupOptions: {
            input: 'src/main.js'
        }
    },
    server: {
        strictPort: true,
        port: 5173
    }
})
