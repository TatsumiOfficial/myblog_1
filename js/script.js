$(document).ready(function() {
  $("input[name='message']").keypress(function(event) {
    if (event.which == 13) {
      event.preventDefault();
      $(this).closest("form").submit();
    }
  });

  $(".chat-form").on("submit", function(e) {
    e.preventDefault();
    var message = $("input[name='message']").val();
    if (message != "") {
      var chatLog = $(".chat-log");
      var userMessage = $("<div class='chat-message user-message'>").html("<i class='far fa-comment-dots question-mark'></i>" + sanitizeInput(message));
      chatLog.append(userMessage);
      var typingIndicator = $("<div class='chat-message bot-message typing-indicator'>").html("<img class='loading-spinner' src='/images/loadings.gif' alt='loading...' style='width: 30px; height: 30px;'>");
      chatLog.append(typingIndicator);
      chatLog.scrollTop(chatLog.prop("scrollHeight"));

      $.ajax({
        type: "POST",
        url: "response.php",
        data: { prompt: sanitizeInput(message) },
        dataType: "json",
        success: function(response) {
          var botResponse = response.response;
          var botMessage = $("<div class='chat-message bot-message'>").html("<i class='far fa-comment-alt comment'></i><code><pre>" + sanitizeInput(botResponse) + "</pre></code>");
          typingIndicator.remove();
          chatLog.append(botMessage);
          chatLog.scrollTop(chatLog.prop("scrollHeight"));
          $("input[name='message']").val("");
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log("AJAX Error: " + textStatus + ", " + errorThrown);
        }
      });
    }
  });

  $(".clear-chat").on("click", function() {
    $(".chat-log").empty();
  });

  function sanitizeInput(input) {
    var temp = document.createElement("div");
    temp.textContent = input;
    return temp.innerHTML;
  }
});
