<?php
include 'config.php';

// Get all comments
$result = mysqli_query($conn, "SELECT * FROM commentaires ORDER BY created_at DESC");
?>

<div class="card mt-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">📌 Commentaires des utilisateurs</h5>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Message</th>
                    <th>Statut</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (mysqli_num_rows($result) > 0) { ?>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= htmlspecialchars($row['nom']) ?></td>
                            <td><?= htmlspecialchars($row['message']) ?></td>
                            <td>
                                <?php if ($row['statut'] == 'approved') { ?>
                                    <span class="badge bg-success">✅ Approuvé</span>
                                <?php } else { ?>
                                    <span class="badge bg-warning text-dark">⏳ En attente</span>
                                <?php } ?>
                            </td>
                            <td><?= $row['created_at'] ?></td>
                            <td>
                                <?php if ($row['statut'] == 'pending') { ?>
                                    <a href="update_comment.php?id=<?= $row['id'] ?>&action=approve" class="btn btn-sm btn-success">Approuver</a>
                                <?php } ?>
                                <a href="update_comment.php?id=<?= $row['id'] ?>&action=delete" class="btn btn-sm btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="6" class="text-center">Aucun commentaire trouvé</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
