<?php
while ($row = mysqli_fetch_assoc($query)) {
    $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
                OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($query2);
    (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result = "No message available";
    (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
    if (isset($row2['outgoing_msg_id'])) {
        ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "Bạn: " : $you = "";
    } else {
        $you = "";
    }
    ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
    ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";

    $output .= '<a href="chat.php?user_id=' . $row['unique_id'] . '" class="side-menu__chat" id="'. $row['unique_id'] . '">
                            <div class="side-menu__chat-avatar">
                                <img src="php/images/' . $row['img'] . '" alt="User Picture">
                            </div>
                            <div class="side-menu__chat-info">
                                <h5>' . $row['username'] . '</h5>
                                <div class="all-content">
                                    <span class="content-text">' . $you . $msg . '</span>
                                </div>
                            </div>
                        </a>';
}

