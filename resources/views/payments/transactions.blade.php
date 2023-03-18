@include('common.header')
<main>
	<div class = "table">
		<table id = "myTransactions" class="stripe row-border">
			<thead>
            <tr>
                <th>Transaction ID</th>
                <th>Amount</th>
                <th>Currency</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th>Paid By</th>
            </tr>
			</thead>
			<tbody>
				@foreach($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->transaction_id }}</td>
                        <td>{{ $transaction->amount }}</td>
                        <td>{{ $transaction->currency }}</td>
                        <td>{{ date('d/m/Y' ,strtotime($transaction->created_at)) }}</td>
                        <td>{{ date('H:i a' ,strtotime($transaction->created_at)) }}</td>
                        <td>{{ $transaction->status }}</td>
                        <td>{{ \App\Http\Controllers\AuthController::getUserName($transaction->paid_by) }}</td>
                    </tr>
				@endforeach
			</tbody>
		</table>
		<script>
			$(document).ready( function () {
    			$('#myTransactions').DataTable();
			} );
		</script>
	</div>
</main>