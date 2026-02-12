import { defineConfig } from 'vite'

export default defineConfig({
  server: {
    host: '0.0.0.0', // 外部（ブラウザ）からの接続を自動許可
    port: 5173,      // 5173番ポートに固定
    strictPort: true, // ポートが空いていなければエラーを出す（勝手に変えない）
    watch: {
      usePolling: true // WindowsやMacに関わらずファイル変更を検知する
    }
  }
})