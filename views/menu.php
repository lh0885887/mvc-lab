<div class="mt-3" style="text-align: center;">
    <h1>Check Out Our Menu!</h1>
</div>

<?php if (empty($beverages)): ?>
    <p>No beverages found.</p>
<?php else: ?>
    <table class="table table-secondary">
        <th>Name</th>
        <th>Size</th>
        <th>Price</th>
        <?php foreach ($beverages as $bev): ?>
            <tr>
                <td><?= htmlspecialchars($bev['name']) ?></td>
                <td><?= htmlspecialchars($bev['size']) ?></td>
                <td>$<?= htmlspecialchars($bev['price']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>