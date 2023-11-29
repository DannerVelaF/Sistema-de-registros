import { defineConfig } from "vite";
import { minify } from "terser";

export default defineConfig({
  plugins: [
    {
      name: "minify",
      apply: "build",
      transformIndexHtml(html) {
        return minify(html, { format: { comments: false } });
      },
    },
  ],
});
