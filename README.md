# POSSE3website
## Pull Request の承認（Approve）ルールについて

本リポジトリでは、コード品質の維持と事故防止のため、  
**Pull Request（PR）を用いたレビュー・承認制**を採用しています。

---

### 🔒 基本ルール

- **main ブランチへの変更は、直接 push できません**
- 必ず **Pull Request を作成**し、**他のメンバーからの承認（Approve）**を得た上でマージします
- 承認がない PR はマージできません

---

### 🔁 開発フロー

1. 作業用ブランチを作成（例：`feature/xxx`）
2. コードを変更して commit
3. Pull Request を作成
4. 他のメンバーがレビューし、**Approve**
5. 承認後、main ブランチへマージ

